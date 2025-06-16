<?php
	require_once "Funcionario.class.php";
	
	
	$chefe_paulo = new Funcionario("Maria Clara", "11111111", "Diretora Administrativa");
	
	
	$subordinado1 = new Funcionario("João", "333333", "Atendente");
	$subordinado2 = new Funcionario("Joaquim", "444444", "Secretário");

	
	$paulo = new Funcionario("Paulo", "2222222", "Gerente Administrativo",array($subordinado1, $subordinado2), $chefe_paulo);
	
	echo "Funcionário: {$paulo->getNome()}<br>";
	
	echo "Chefe do Paulo - {$paulo->getChefe()->getNome()}<br>";
	
	echo "<h2>Subordinados</h2>";
	
	foreach($paulo->getSubordinados() as $objeto_funcionario)
	{
		echo "Nome: {$objeto_funcionario->getNome()}<br>";
	}
	
	
	
?>