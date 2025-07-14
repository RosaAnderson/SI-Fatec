<?php
	if($_GET)
	{
		require_once "Controllers/praiaController.class.php";
		$metodo = $_GET["metodo"];
		$obj = new praiaController();
		$obj->$metodo();
	}
	else
	{
		require_once "Controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
?>