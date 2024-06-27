<?php
	if($_GET)
	{	
		require_once "../Models/Conexao.php";
		require_once "../Models/pessoa.class.php";
		require_once "../Models/Editora.class.php";
		require_once "../Models/EditoraDAO.php";

		$Editora = new Editora($_GET["edi_id"], "", $_GET["edi_status"]);
		
		$EditoraDAO = new EditoraDAO();
		
		$EditoraDAO->alterar_status_Editora($Editora);
		
		header("Location:listar_editoras.php");
	}
?>
