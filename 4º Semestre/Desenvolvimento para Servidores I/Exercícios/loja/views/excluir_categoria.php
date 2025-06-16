<?php

	if(isset($_GET["id"]))
	{
		require_once "../models/c.conexao.php";
		require_once "../models/c.categoriaDAO.php";
		require_once "../models/c.categoria.php";
		
		$categoria = new Categoria($_GET["id"]);
		
		$CategoriaDAO = new CategoriaDAO();
		
		$CategoriaDAO -> excluir($categoria);
		
		header("location:listar_categorias.php");
	}
?>