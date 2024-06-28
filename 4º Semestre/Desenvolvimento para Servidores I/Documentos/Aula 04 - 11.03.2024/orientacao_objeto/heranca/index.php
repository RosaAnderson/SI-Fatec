<?php
	require_once "Conta.class.php";
	require_once "Corrente.class.php";
	require_once "Poupanca.class.php";
	
	
	$corrente = new Corrente(1000.00, "0123-4", "12345-6", 500.00);
	
	echo "<pre>";
	var_dump($corrente);
	echo "</pre>";
	
	$conta = new Conta("987-0", "9876-5", 20000);
	
	echo "<pre>";
	var_dump($conta);
	echo "</pre>";
	
	$poupanca = new Poupanca(25, "0123-4", "12345-6", 500.00);
	
	echo "<pre>";
	var_dump($poupanca);
	echo "</pre>";
?>