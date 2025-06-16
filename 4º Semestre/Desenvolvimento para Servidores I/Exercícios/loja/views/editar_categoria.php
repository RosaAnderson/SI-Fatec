<?php
	$erro = "";

	require_once "../models/c.conexao.php";
	require_once "../models/c.categoria.php";
	require_once "../models/c.categoriaDAO.php";
	
	if($_GET)
	{
		$categoria = new Categoria($_GET["id"]);	
		
		$categoriaDAO = new CategoriaDAO();
		
		$retorno = $categoriaDAO -> buscar_uma_categoria($categoria);	
	}
	
	if($_POST)
	{
		if(empty($_POST["descritivo"]))
		{
			$erro = "Preencha o descritivo da categoria";
		}
		else
		{
			$categoria = new Categoria($_POST["idcategoria"], $_POST["descritivo"]);
			
			//alterar
			$categoriaDAO = new CategoriaDAO();

			$categoriaDAO -> alterar($categoria);
			header("location:listar_categorias.php");
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loja</title>
	</head>
	<body>
		<h1>Categoria</h1>
		<form action="#" method="post">
			<label for="descritivo">Descritivo:</label>
			<input type="hidden" name="idcategoria" id="idcategoria" value="<?php echo $retorno[0] -> idcategoria;?>">
			<input type="text" name="descritivo" id="descritivo" value="<?php echo $retorno[0] -> descritivo;?>">
			<div><?php echo $erro;?></div>
			<br><br>
			<input type="submit" value="Salvar">
		</form>
	</body>
</html>