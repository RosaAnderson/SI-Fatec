<?php
	require_once "Pessoa.class.php";
	require_once "Proprietario.class.php";
	require_once "Cachorro.class.php";
	require_once "Servico.class.php";
	require_once "Atendimento.class.php";
	
	
	$proprietario = new Proprietario("1111111-11", array(), "Pedro da Silva", "(14)9999999");
	
	$cachorro = new Cachorro("bob", "Caramelo", "SRD", "01/02/2012",$proprietario);
	
	$servico1 = new Servico("Tosa", 60.00);
	$servico2 = new Servico("Banho", 45.50);
	
	$atendimento = new Atendimento("01/04/2024",$cachorro, array($servico1, $servico2));
	
	echo "<h1>Atendimento</h1>";
	
	echo "Data: {$atendimento->getData()}<br>";
	
	echo "<h2>Serviço(s)</h2>";
	
	foreach($atendimento->getServico() as $objeto_servico)
	{
		echo "Descritivo:{$objeto_servico->getDescritivo()}<br>";
		
		echo "Preço: " . number_format($objeto_servico->getPreco(),2, ",", ".") . "<br>";
	}
	
	echo "<h2>Cachorro</h2>";
	
	echo "Nome:{$atendimento->getCachorro()->getNome()}<br>";
	echo "Cor:{$atendimento->getCachorro()->getCor()}<br>";
	echo "Raça:{$atendimento->getCachorro()->getRaca()}<br>";
	echo "Data de Nascimento:{$atendimento->getCachorro()->getDataNascimento()}<br>";
	
	echo "<h3>Proprietário</h3>";
	
	echo "Nome:{$atendimento->getCachorro()->getProprietario()->getNome()}<br>";
	
	echo "CPF:{$atendimento->getCachorro()->getProprietario()->getCpf()}<br>";
	
	echo "Telefone:{$atendimento->getCachorro()->getProprietario()->getTelefone()}<br>";
?>