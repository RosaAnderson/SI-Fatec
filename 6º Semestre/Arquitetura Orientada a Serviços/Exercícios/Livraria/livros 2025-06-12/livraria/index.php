<?php
	if($_GET)
	{
		$metodo = $_GET["metodo"];
		$controle = $_GET["controle"];
		
		require_once "controllers/" . $_GET["controle"] . ".class.php";
		
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		require_once "controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
?>