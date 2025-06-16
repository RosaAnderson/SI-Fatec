<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/Produto.class.php";
	require_once "../models/produtoDAO.class.php";
	require_once "../models/Categoria.class.php";
	require_once "../models/categoriaDAO.class.php";
	
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
		
		if($_POST["categoria"] == "0")
		{
			$msg[4] = "Escolha uma categoria para o produto";
			$erro = true;
		}
		if($_FILES["imagem"]["name"] == "")
		{
			$msg[5] = "Escolha uma imagem para o produto";
			$erro = true;
		}
		else
		{
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
			
			$produto = new Produto(0, $_POST["nome"], $_POST["descricao"], $_POST["preco"], $_FILES["imagem"]["name"], $_POST["estoque"], $categoria);
			
			$produtoDAO = new produtoDAO();
			
			$produtoDAO->inserir($produto);
			
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
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label>
				<input type="text"  id="nome" name="nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label><br>
				<textarea name="descricao" id="descricao"><?php echo isset($_POST['descricao'])?$_POST['descricao']:''?></textarea>
				<div style="color:red"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="preco" class="form-label">Preço</label>
				<input type="text" class="form-control" id="preco" name="preco" value="<?php echo isset($_POST['preco'])?$_POST['preco']:''?>">
				<div style="color:red"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="estoque" class="form-label">Estoque</label>
				<input type="number" class="form-control" id="estoque" name="estoque" value="<?php echo isset($_POST['estoque'])?$_POST['estoque']:''?>">
				<div style="color:red"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="categoria" class="form-label">Categoria</label>
				<select name="categoria" id="categoria">
					<option value="0">Escolha uma categoria</option>
					<?php
						//buscar categorias BD
						
				$categoria = new Categoria(status:"Ativo");
						
						$categoriaDAO = new categoriaDAO();
						
	$ret = $categoriaDAO->buscar_categorias_ativas($categoria);
	
				foreach($ret as $dado)
				{
					if(isset($_POST["categoria"]) && $_POST["categoria"] == $dado->idcategoria)
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
			<br><br>
			<div class="mb-3">
				<img src="" id="img">
			</div>
			<br><br>
			<input class="btn btn-primary" type="submit" value="Cadastrar">
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