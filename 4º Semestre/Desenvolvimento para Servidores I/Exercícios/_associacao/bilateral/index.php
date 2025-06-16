<?php

	require_once "c.produto.php";
	require_once "c.fornecedor.php";
	

	$fornec1 = new fornecedor('41.735.280/0001-63', 'Faber Castel');
	$fornec2 = new fornecedor('63.280.735/0001-41', 'Romulo & Romulo');

	$prod = new produto('Lápis Preto', 'Lápis Preto nº 2', 1.20, array($fornec1, $fornec2));
	
	$fornec3 = new fornecedor('63.444.999/0001-41', 'Pilot');
	
	$prod -> setFornecedor($fornec3);
	
	/**
	echo "<pre>";
		var_dump($prod);
	echo "</pre>";
	/**/
	
	echo "<h2> Produto <h2>";
	
	echo "Nome: {$prod -> getNome()} <br>";
	echo "Descrição: {$prod -> getDescricao()} <br>";
	echo "Preço: R$" . number_format($prod -> getPreco(), 2, ',', '.') . "<br>";

	echo "<h3> Fornecedor <h3>";

	foreach ($prod -> getFornecedor() as $obj)
	{
		echo "CNPJ: {$obj -> getCNPJ()} <br>";
		echo "Razão Social: {$obj -> getRazao_Social()} <br><br>";
	}
	
	
?>