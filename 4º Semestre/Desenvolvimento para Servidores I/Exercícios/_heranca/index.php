<?php

	require_once "c.conta.php";
	require_once "c.corrente.php";
	require_once "c.poupanca.php";
	
/**	
# uma classe abstrata não pode ter instancia de objetos
	$con = new Conta('0027', '903987', 499.99);
	
	echo "<pre>";
		var_dump($con);
	echo "</pre>";	
/**/

	$cc = new Corrente(1000.00, '0027', '903987', 500.00);
	
	echo "<pre>";
		var_dump($cc);
	echo "</pre>";	
	
	$cp = new Poupanca(18, '0027', '903987', 500.00);
	
	echo "<pre>";
		var_dump($cp);
	echo "</pre>";	
	
	
	$cc -> retirada(500);
	
	echo "Saldo CC: {$cc -> getSaldo()}<br>";
	
	$cp -> retirada(50);
	
	echo "<br>";

	echo "Saldo CP: {$cp -> getSaldo()}<br>";	
	
?>