<?php
	require_once "Pessoa.class.php";
	require_once "Aluno.class.php";
	require_once "Professor.class.php";
	require_once "Matricula.class.php";
	require_once "Modalidade.class.php";
	
	$professor = new Professor("Renshi", "Yamamoto", "22222-22");
	
	$modalidade = new Modalidade("Karatê", array($professor));
	
	$aluno = new Aluno("21/12/2002", "Carlos da Silva", "333333-33");
	
	$matricula = new Matricula("01/04/2024", $modalidade, $aluno);
	
	
	echo "<h1>Matrícula</h1>";
	echo "Data: {$matricula->getData_matricula()}<br>";
	echo "<h2>Aluno</h2>";
	echo "Nome: {$matricula->getAluno()->getNome()}<br>";
	echo "CPF: {$matricula->getAluno()->getCpf()}<br>";
	echo "Data de Nascimento: {$matricula->getAluno()->getData_nascimento()}<br>";
	echo "<h2>Modalidade</h2>";
	echo "Descritivo: {$matricula->getModalidade()->getDescritivo()}<br>";
	echo "<h3>Professor</h3>";
	
	echo "Nome: {$matricula->getModalidade()->getProfessor()[0]->getNome()}<br>";
	
	echo "CPF: {$matricula->getModalidade()->getProfessor()[0]->getCpf()}<br>";
	
	echo "Título: {$matricula->getModalidade()->getProfessor()[0]->getTitulo()}<br>";
?>