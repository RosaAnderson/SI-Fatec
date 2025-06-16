<?php
	if($_GET)
	{
		require_once "../models/c.conexao.php";
		require_once "../models/c.categoria.php";
		require_once "../models/c.categoriaDAO.php";
		
		$categoria = new Categoria($_GET["id"], "", $_GET["status"]);
		$categoriaDAO = new categoriaDAO();
		$categoriaDAO -> alterar_status_categoria($categoria);
		header("Location:listar_categorias.php");
	}
?>