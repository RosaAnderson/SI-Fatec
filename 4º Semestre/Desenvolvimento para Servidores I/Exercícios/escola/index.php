<?php
	
	require_once "class/c.pessoa.php";
	require_once "class/c.professor.php";
	require_once "class/c.funcionario.php";
	require_once "class/c.aluno.php";
	require_once "class/c.modalidade.php";
	require_once "class/c.matricula.php";
	
	
	$alu01  = new Aluno('31/07/1979', 'Albert Lincon', '999.111.222-33');

	$prof01 = new Professor('shihan-hanshi', 'Albert Einstein', '000.111.222-33');
	
	$mod01  = new Modalidade('Judô', array($prof01));
	
	$mat    = new Matricula('10/01/2024', $mod01, $alu01);



	
	echo "<h2> Matricula </h2>";
	
	echo "Data: {$mat -> getDataMatricula()} <br>";
	
	echo "<h3> Aluno </h3>";
	
//	echo "Nome: {$mat -> getAluno() -> getNome()} <br>";
//	echo "CPF: {$mat -> getAluno() -> getCPF()} <br>";
//	echo "Nascimento: {$mat -> getAluno() -> getDataNascimento()} <br>";
	
	





	
/**
	// Professores
	$prof01 = new Professor('shihan-hanshi', 'Albert Einstein',    '000.111.222-33');
	$prof02 = new Professor('kiosi',         'Isaac Newton',       '111.222.333-44');
	$prof03 = new Professor('renshi',        'Robert Oppenheimer', '222.333.444-55');
	$prof04 = new Professor('kaysho',        'Stephen Hawking',    '333.444.555-66');

	// Alunos
	$alu01 = new Aluno('31/07/1979', 'Albert Lincon',  '999.111.222-33');
	$alu02 = new Aluno('31/01/1997', 'Isaac Vargas',   '888.222.333-44');
	$alu03 = new Aluno('31/03/2000', 'Robert Putin',   '777.333.444-55');
	$alu04 = new Aluno('31/12/1980', 'Stephen Macron', '666.444.555-66');

	// Modalidades
	$mod01 = new Modalidade('Judô',   array($prof01, $prof02, $alu01));
	$mod02 = new Modalidade('Aikidô', array($prof02, $prof03, $alu02));
	$mod03 = new Modalidade('Karatê', array($prof03, $prof04, $alu03));

	// Matriculas
	$mat01 = new Matricula('10/01/2024', array($mod01));
	$mat02 = new Matricula('15/01/2024', array($mod02));
	$mat03 = new Matricula('18/01/2024', array($mod03));
/**/
?>
