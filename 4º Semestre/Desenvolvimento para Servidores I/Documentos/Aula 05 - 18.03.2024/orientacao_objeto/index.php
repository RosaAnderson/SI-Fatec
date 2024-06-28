<?php
	require_once "Cliente1.class.php";
	//criando um objeto 
	
	$obj1 = new Cliente1(celular:"(14)999999", cpf:"111.111.111-11");
	
	/*$obj1->nome = "Maria da Silva";
	$obj1->cpf = "111.111.111-11";
	$obj1->endereco = "Rua XV de Novembro - 200, Centro - Jaú";
	$obj1->celular = "(14)9999999";*/
	echo $obj1->inserir();
	//$obj1->alterar("Maria Helena da Silva");
	echo $obj1->inserir();
	echo "<pre>";
	var_dump($obj1);
	echo "</pre>";
?>