<?php
	if($_GET)
	{
		require_once "controllers/doacaoController.class.php";
		$metodo = $_GET["metodo"];
		$obj = new doacaoController();
		$obj->$metodo();
	}
	else
	{
		require_once "controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
?>