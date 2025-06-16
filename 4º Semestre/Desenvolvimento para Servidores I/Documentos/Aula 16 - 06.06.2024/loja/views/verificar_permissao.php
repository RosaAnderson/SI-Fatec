<?php
	if(isset($_SESSION["perfil"]) && $_SESSION["perfil"] != "Administrador")
	{
		header("location:index.php");
	}
?>