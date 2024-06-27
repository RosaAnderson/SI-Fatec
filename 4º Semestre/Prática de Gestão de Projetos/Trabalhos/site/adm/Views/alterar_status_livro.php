<?php
	if($_GET)
	{	
		require_once "../Models/Conexao.php";
		require_once "../Models/pessoa.class.php";
		require_once "../Models/Livro.class.php";
		require_once "../Models/LivroDAO.php";

		$Livro = new Livro($_GET["liv_id"], 0, $_GET["liv_status"]);
		
		$LivroDAO = new LivroDAO();
		
		$LivroDAO->alterar_status_livros($Livro);
		
		header("Location:listar_livros.php");
	}
?>
