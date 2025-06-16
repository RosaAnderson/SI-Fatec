<?php

    require_once "c.ator.php";
    require_once "c.filme.php";
    require_once "c.papel.php";


	$filme01 = new filme('Fury', 2014);
	
	$ator01 = new filme('Brad Pitt', 'Americano');
	$ator02 = new filme('Shia LaBeouf', 'Americano'); # Boyd 'Bible' Swan
	$ator03 = new filme('Michael Peña', 'Americano'); # Trini 'Gordo' Garcia
	$ator04 = new filme('Anamaria Marinca', 'Romena'); # Irma

	$per = new papel("Don 'Wardaddy' Collier", $ator01, $filme01);

	/**/
	echo "<pre>";
		var_dump($per);
	echo "</pre>";
	/**/
?>