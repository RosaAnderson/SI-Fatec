<?php
	if($_GET)
	{
		require_once "../models/Conexao.class.php";
		require_once "../models/Categoria.class.php";
		require_once "../models/categoriaDAO.class.php";
		
		$categoria = new Categoria($_GET["id"], "", $_GET["status"]);
		$categoriaDAO = new categoriaDAO();
		$categoriaDAO->alterar_status_categoria($categoria);
		header("Location:listar_categorias.php");
	}
?>