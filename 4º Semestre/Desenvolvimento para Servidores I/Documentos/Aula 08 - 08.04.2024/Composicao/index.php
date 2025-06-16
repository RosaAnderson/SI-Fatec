<?php
	require_once "Endereco.class.php";
	require_once "Aluno.class.php";
	
	
	$aluno1 = new Aluno("Pedro Assis", "1111111", "(14)999999", "Rua XV de Novembro", "123", "Centro", "17230456");
	
	$aluno1->setEndereco("Rua 7 de Setembro", "345", "Centro", "17898654");
	
	echo "<pre>";
	var_dump($aluno1);
	echo "</pre>";
	
	$aluno2 = new Aluno("Maria Carvalho", "222222", "(15)987665");
	
	$endereco = new Endereco("Rua Piracicaba", "7899", "Centro", "1920202", $aluno2);
	
	echo "<pre>";
	var_dump($endereco);
	echo "</pre>";
	
	
?>