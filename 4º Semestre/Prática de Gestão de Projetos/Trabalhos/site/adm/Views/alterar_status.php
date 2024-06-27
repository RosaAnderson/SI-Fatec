<?php
	if($_GET)
	{	
		require_once "../Models/Conexao.php";
		require_once "../Models/pessoa.class.php";
		require_once "../Models/Autor.class.php";
		require_once "../Models/AutorDAO.php";

		$autor = new Autor($_GET["aut_id"], $_GET["aut_status"], "");
		
		$AutorDAO = new AutorDAO();
		
		$AutorDAO->alterar_status_autores($autor);
		
		header("Location:listar_autores.php");
	}
?>
