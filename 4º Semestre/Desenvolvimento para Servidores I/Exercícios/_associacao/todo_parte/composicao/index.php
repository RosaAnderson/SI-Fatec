<?php

	require_once "c.endereco.php";
	require_once "c.aluno.php";
	
	
	
	
	
#	$cat01 = new Categoria('Material Escolar');
#	$cat02 = new Categoria('Material Pintura');
	
	$alu01  = new Aluno('Anderson', '87882348686-87', '14999993333', 
						'Felipe Santiago', '200', 'Centro', '17724-876');

#	$alu01 -> setEndereco('Florencio de Abreu', '1200', 'Guaianases', '01724-876');

	echo '<pre>';
	var_dump($alu01);
	echo "</pre>";
/**
	$alu02  = new Aluno('Genivaldo', '87882348686-87', '14999993333');

	$end    = new Endereco('Felipe Santiago', '240', 'Centro', '17724-876', $alu02);

	echo "<br><br><br>";

	echo '<pre>';
	var_dump($end);
	echo "</pre>";
/**/

/*
	echo "<h2> Produtos </h2>";
	
	echo "Nome: {$prod -> getNome()} <br>";
	echo "Descrição: {$prod -> getDescricao()} <br>";
	echo "Preço: R$ " . number_format($prod -> getPreco(), 2, ',', '.') . "<br>"; 
	
	echo "<h3> Categorias </h3>";

	foreach ($prod -> getCategoria() as $obj)
	{
		echo "Categoria: {$obj -> getDescritivo()} <br>";
	}
*/
?>