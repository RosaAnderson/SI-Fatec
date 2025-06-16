<?php
	require_once "header.php";
	
	require_once '../models/c.conexao.php';
	require_once '../models/c.produto.php';
	require_once '../models/c.produtoDAO.php';
	require_once '../models/c.categoria.php';
	require_once '../models/c.categoriaDAO.php';

	$msg = array('','','','','','');
	
	if($_POST){

		$erro = false;

		if(empty($_POST["nome"])){
			$msg[0] = "Preencha o nome do produto!";
			$erro = true;
		}

		if(empty($_POST["descricao"])){
			$msg[1] = "Preencha a descrição do produto!";
			$erro = true;
		}

		if(empty($_POST["preco"])){
			$msg[2] = "Preencha o preço do produto!";
			$erro = true;
		}

		if(empty($_POST["estoque"])){
			$msg[3] = "Preencha o estoque do produto!";
			$erro = true;
		}

		if($_POST["categoria"] == 0){
			$msg[4] = "Escolha uma categoria valida para o produto!";
			$erro = true;
		}

		if(empty($_POST["descricao"])){
			$msg[5] = "Preencha a descrição do produto!";
			$erro = true;
		}
		
		if(empty($_FILES["imagem"]["name"] != "")){
			$msg[5] = "Selecione a imagem do produto!";
			$erro = true;
		}
		else
		{
			if($_FILES["imagem"]["type"] != "image/png" && 
			$_FILES["imagem"]["type"] != "image/jpeg" && 
			$_FILES["imagem"]["type"] != "image/webp")
			{
				$msg[5] = "Formato de imagem invalida!";
				$erro = true;
			}
		}

		if(!$erro)
		{
			$categoria = new Categoria($_POST["categoria"]);
			
			$produto = new Produto(0 ,    					
										$_POST["nome"],
                                        $_POST["descricao"],
                                        $_POST["preco"],
                                        $_FILES["imagem"]["name"],
                                        $_POST["estoque"],
                                        $categoria);

			//inserir
			$produtoDAO = new ProdutoDAO();

			$produtoDAO->inserir($produto);

			header("location:listar_produtos.php");
		}

		if($erro = true){

		}

		echo "<pre>";
		var_dump($_FILES["imagem"]);
		echo "</pre>";
		
		
	}
?>
	<div class="content">
	  <div class="container">
		<h1 class="row justify-content-center align-items-center">Produto</h1>
		<form class="form-control" action="#" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label>
				<input class="form-control" type="text"  id="nome" name="nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label>
				<textarea class="form-control" name="descricao" id="descricao"><?php echo isset($_POST['descricao'])?$_POST['descricao']:''?></textarea>
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
						//buscar as categorias no BD
						$categoria = new Categoria(status:'1');
						
						$categoriaDAO = new CategoriaDAO();
				
						//listar categoria
						$retorno = $categoriaDAO -> buscar_ativas($categoria);
						
						foreach($retorno as $dado)
							if (isset($_POST["categoria"]) && 
									  $_POST["categoria"] == $dado -> idcategoria)
								echo "
									<option value = '{$dado -> idcategoria}' selected='selected'> {$dado -> descritivo} </option>
								";								
							else
								echo "
									<option value = '{$dado -> idcategoria}'> {$dado -> descritivo} </option>
								";
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
			<input class="btn btn-primary" type="submit" value="Incluir">
		</form>
	  </div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script>
		function mostrar(img)
		{
			if(img.files && img.files[0])
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