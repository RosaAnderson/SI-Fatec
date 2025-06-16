<?php
	
	require_once "class/c.pessoa.php";
	require_once "class/c.proprietario.php";
//	require_once "class/c.profissional.php";
	require_once "class/c.cachorro.php";
	require_once "class/c.atendimento.php";
	require_once "class/c.servico.php";


	$prop = new Proprietario('265.194.348-76', 'Anderson Rosa', '(14) 99906 5400');
	
	$dog   = new Cachorro('Venus', 'Caramelo', 'SRD', '20/03/2013', $prop);
	
	$serv1 = new Servico('Banho', 35.60);
	$serv2 = new Servico('Tosa', 15.45);
	
	$atd   = new Atendimento('30/03/2024', array($serv1, $serv2), $dog);


	echo "<h2> Atendimento </h2>";
	
	echo "Data: {$atd -> getData()} <br>";
	
	echo "<h3> Serviço </h3>";
	
	foreach ($atd -> getServico() as $obj_serv)
	{
		echo "Descritivo: {$obj_serv -> getDescritivo()} <br>";
		echo "Preço: " . number_format($obj_serv -> getPreco(), 2, ',' , '.'). "<br>";
	}

	echo "<h3> Cachorro </h3>";
	
	echo "Cachorro: {$atd -> getCachorro() -> getNome()} <br>";
	echo "Cor: {$atd -> getCachorro() -> getCor()} <br>";
	echo "Raça: {$atd -> getCachorro() -> getRaca()} <br>";
	echo "Nascimento: {$atd -> getCachorro() -> getNascimento()} <br>";
	
	echo "<h3> Tutor </h3>";
	
	echo "Nome: {$atd -> getCachorro() -> getProprietario() -> getNome()} <br>";
	echo "CPF: {$atd -> getCachorro() -> getProprietario() -> getCPF()} <br>";
	echo "Telefone: {$atd -> getCachorro() -> getProprietario() -> getTelefone()} <br>";

?>
