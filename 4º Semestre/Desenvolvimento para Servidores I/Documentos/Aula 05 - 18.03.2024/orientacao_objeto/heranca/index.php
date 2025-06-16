<?php
	require_once "Conta.class.php";
	require_once "Corrente.class.php";
	require_once "Poupanca.class.php";
	
	
	$corrente = new Corrente(1000.00, "0123-4", "12345-6", 500.00);
	
	/*echo "<pre>";
	var_dump($corrente);
	echo "</pre>";*/
	
	//uma classe abstrata não pode ter instância de objetos
	/*$conta = new Conta("987-0", "9876-5", 20000);
	
	echo "<pre>";
	var_dump($conta);
	echo "</pre>";*/
	
	$poupanca = new Poupanca(15, "0123-4", "12345-6", 500.00);
	
	/*echo "<pre>";
	var_dump($poupanca);
	echo "</pre>";*/
	
	$corrente->retirada(1500);
	
	echo "Saldo = {$corrente->getSaldo()}<br>";
	
	$poupanca->retirada(300);
	
	echo "<br>Saldo da Poupança = {$poupanca->getSaldo()}<br>";
?>