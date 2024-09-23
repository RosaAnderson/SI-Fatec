<?php

	require_once "c.produto.php";
	require_once "c.categoria.php";
	
	
	$cat01 = new Categoria('Material Escolar');
	$cat02 = new Categoria('Material Pintura');
	
	$prod  = new Produto('Lápis colorido', 'Caixa de Lápis 12 cores', 11.90, array($cat01, $cat02));

	echo "<h2> Produtos </h2>";
	
	echo "Nome: {$prod -> getNome()} <br>";
	echo "Descrição: {$prod -> getDescricao()} <br>";
	echo "Preço: R$ " . number_format($prod -> getPreco(), 2, ',', '.') . "<br>"; 
	
	echo "<h3> Categorias </h3>";

	foreach ($prod -> getCategoria() as $obj)
	{
		echo "Categoria: {$obj -> getDescritivo()} <br>";
	}
?>