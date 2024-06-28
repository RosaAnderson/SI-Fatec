<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/Produto.class.php";
	require_once "../models/produtoDAO.class.php";
	require_once "../models/Categoria.class.php";
	require_once "../models/categoriaDAO.class.php";
	
	if($_GET)
	{
		$produto = new Produto($_GET["idproduto"]);
		$produtoDAO = new produtoDAO();
		$ret = $produtoDAO->buscar_um($produto);
	}		

	$msg = array("","","","","","");
	
	if($_POST)
	{
		$erro = false;
		if(empty($_POST["nome"]))
		{
			$msg[0] = "Preencha o nome do produto";
			$erro = true;
		}
		
		if(empty($_POST["descricao"]))
		{
			$msg[1] = "Preencha a descrição do produto";
			$erro = true;
		}
		
		if(empty($_POST["preco"]))
		{
			$msg[2] = "Preencha o preço do produto";
			$erro = true;
		}
		
		if(empty($_POST["estoque"]))
		{
			$msg[3] = "Preencha o estoque do produto";
			$erro = true;
		}
		
		$imagem = $_POST["img_bd"];
		
		if($_FILES["imagem"]["name"] != "")
		{
			$imagem = $_FILES["imagem"]["name"];
			if($_FILES["imagem"]["type"] != "image/png" &&    $_FILES["imagem"]["type"] != "image/jpg" && 
			$_FILES["imagem"]["type"] != "image/jpeg")
			{
				$msg[5] = "Tipo de imagem invalido";
				$erro = true;
			}
		}
		
		if(!$erro)
		{
			//inserir no BD
			$categoria = new Categoria($_POST["categoria"]);
			
			$produto = new Produto($_POST["idproduto"], $_POST["nome"], $_POST["descricao"], $_POST["preco"], $imagem, $_POST["estoque"], $categoria);
			
			$produtoDAO = new produtoDAO();
			
			$produtoDAO->alterar($produto);
			
			header("location:listar_produtos.php");
			die();
			
		}
		
	}//fim if post
	
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
		<h1>Produto</h1>
		<form class="form-control" action="#" method="POST" enctype="multipart/form-data">
		
		<input type="hidden" name="idproduto" value="<?php echo $ret[0]->idproduto;?>">
		
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label>
				
				<input type="text"  id="nome" name="nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:$ret[0]->nome?>">
				
				
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label><br>
				<textarea name="descricao" id="descricao"><?php echo isset($_POST['descricao'])?$_POST['descricao']:$ret[0]->descricao?></textarea>
				<div style="color:red"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="preco" class="form-label">Preço</label>
				<input type="text" class="form-control" id="preco" name="preco" value="<?php echo isset($_POST['preco'])?$_POST['preco']:$ret[0]->preco?>">
				<div style="color:red"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="estoque" class="form-label">Estoque</label>
				<input type="number" class="form-control" id="estoque" name="estoque" value="<?php echo isset($_POST['estoque'])?$_POST['estoque']:$ret[0]->estoque?>">
				<div style="color:red"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="categoria" class="form-label">Categoria</label>
				<select name="categoria" id="categoria">
					
					<?php
						//buscar categorias BD
						
				$categoria = new Categoria(status:"Ativo");
						
						$categoriaDAO = new categoriaDAO();
						
	$retorno = $categoriaDAO->buscar_categorias_ativas($categoria);
	
				foreach($retorno as $dado)
				{
					if($ret[0]->idcategoria == $dado->idcategoria)
					{
						echo "<option value='{$dado->idcategoria}' selected>{$dado->descritivo}</option>";
					}
					else
					{
						echo "<option value='{$dado->idcategoria}'>{$dado->descritivo}</option>";
					}
				}//fim do foreach
						
					?>
				</select>
				<div style="color:red"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="imagem" class="form-label">Imagem</label>
				<input type="file" class="form-control" id="imagem" name="imagem" onchange="mostrar(this)" accept="image/png, image/jpeg">
				<div style="color:red"><?php echo $msg[5] != ""?$msg[5]:'';?></div>
			</div>
			<input type="hidden" name="img_bd" value="<?php echo $ret[0]->imagem ?>">
			<br><br>
			<div class="mb-3">
				<img src="../produtos/<?php echo $ret[0]->imagem?>" id="img" style="width:170px;height:100px">
			</div>
			
			<br><br>
			<input class="btn btn-primary" type="submit" value="Alterar">
		</form>
	  </div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script>
		function mostrar(img)
		{
			if(img.files  && img.files[0])
			{
				var reader = new FileReader();
				reader.onload = function(e){
					$('#img')
					.attr('src', e.target.result)
					.width(170)
					.height(100);
				};
				reader.readAsDataURL(img.files[0]);
			}
		}
	</script>




<?php
	require_once "footer.html";
?>