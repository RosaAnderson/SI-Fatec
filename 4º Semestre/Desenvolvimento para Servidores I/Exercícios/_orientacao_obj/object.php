<?php
	// caminho das classes
	require_once "class04.php";

	// objeto
	$obj01 = new Cliente('Anderson Rosa', '010.101.000-01', 'Rua João Alberto Scenna, 21', '19 99906 5400');
//	$obj01 = new Cliente('Anderson Rosa', endereco: 'Rua João Alberto Scenna, 21');
	
/*	echo $obj01 -> inserir();
	
	$obj01 -> editar("Jonas");
	
	//$obj01 -> inserir();
	
	echo $obj01 -> inserir();
	
	// exibe o conteudo do objeto
	echo "<pre>";
		var_dump($obj01);
	echo "</pre>";	
*/
//	echo $obj01 -> getNome();


	echo "{$obj01 -> getNome()} <br>";
	$obj01 -> setnome('Valdomiro');
	echo $obj01 -> getNome();
?>