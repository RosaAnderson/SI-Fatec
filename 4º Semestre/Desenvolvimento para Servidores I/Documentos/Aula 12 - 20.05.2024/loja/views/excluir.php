<?php
	if(isset($_GET["id"]))
	{
		require_once "../models/Conexao.class.php";
		require_once "../models/categoriaDAO.class.php";
		require_once "../models/categoria.class.php";
		
		$categoria = new Categoria($_GET["id"]);
		
		$categoriaDAO = new categoriaDAO();
		$categoriaDAO->excluir($categoria);
		header("location:listar_categorias.php");
	}
?>