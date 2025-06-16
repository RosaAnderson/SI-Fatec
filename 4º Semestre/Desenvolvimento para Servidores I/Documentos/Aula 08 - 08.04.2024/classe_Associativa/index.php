<?php
	require_once "Filme.class.php";
	require_once "Ator.class.php";
	require_once "Atuacao.class.php";
	
	$filme = new Filme("Harry Potter - Pedra Filosofal", 1999);
	
	$ator = new Ator("Daniel Radcliffe", "Britanico");
	
	$atuacao = new Atuacao("Harry Potter", $filme, $ator);


	//mostrando dos dados do objeto atuacao
	
	echo "<h1>Atuação</h1>";
	
	echo "Papel: {$atuacao->getPapel()}<br>";
	
	
	echo "<h2>Filme</h2>";
	
	echo "Título: {$atuacao->getFilme()->getTitulo()}<br>";
	echo "Ano: {$atuacao->getFilme()->getAno()}<br>";
	
	
	echo "<h2>Ator</h2>";
	
	echo "Nome: {$atuacao->getAtor()->getNome()}<br>";
	echo "Nacionalidade: {$atuacao->getAtor()->getNacionalidade()}<br>";
	
?>