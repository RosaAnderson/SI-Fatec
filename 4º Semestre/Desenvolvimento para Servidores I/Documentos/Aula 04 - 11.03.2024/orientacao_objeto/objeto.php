<?php
	require_once "cliente2.class.php";
	$obj = new Cliente2(endereco:"Rua 7 de setembro, 1567", nome:"Pedro");
	
	/*echo "<pre>";
	var_dump($obj);
	echo "</pre>";*/
	
	echo "{$obj->getNome()}<br>";
	$obj->setNome("Pedro da Silva");
	echo "{$obj->getNome()}<br>";
	
?>