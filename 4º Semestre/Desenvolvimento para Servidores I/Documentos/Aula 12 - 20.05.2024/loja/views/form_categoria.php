<?php
	$erro = "";
	if($_POST)
	{
		if(empty($_POST["descritivo"]))
		{
			$erro = "Preencha o descritivo da categoria";
		}
		else
		{
			require_once "../models/Conexao.class.php";
			require_once "../models/Categoria.class.php";
			require_once "../models/categoriaDAO.class.php";
			$categoria = new Categoria(0 , $_POST["descritivo"], "Ativo");
			//inserir
			$categoriaDAO = new categoriaDAO();
			$categoriaDAO->inserir($categoria);
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
			<input type="text" name="descritivo" id="descritivo">
			<div><?php echo $erro;?></div>
			<br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>