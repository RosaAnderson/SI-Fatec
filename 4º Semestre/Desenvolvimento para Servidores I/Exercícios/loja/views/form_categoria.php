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
			require_once "../models/c.conexao.php";
			require_once "../models/c.categoria.php";
			require_once "../models/c.categoriaDAO.php";

			$categoria = new Categoria(0 , $_POST["descritivo"]);

			//inserir
			$categoriaDAO = new CategoriaDAO();

			$categoriaDAO->inserir($categoria);

			header("location:listar_categorias.php");
		}
	}

	require_once 'header.php';
?>
	<div class="content">
		<div class="container">
			<h2 class="row justify-content-center align-items-center">Categoria</h2>
			<form class="form-control" action="#" method="POST">
				<label for="descritivo">Descritivo:</label>
				<input class="form-control" type="text" name="descritivo" id="descritivo">
				<div><?php echo $erro;?></div>
				<br>
				<input class="btn btn-primary" type="submit" value="Incluir">
			</form>
		</div>
	</div>
<?php
	require_once 'footer.html';
?>