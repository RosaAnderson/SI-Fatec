<?php

	require_once "c.funcionario.php";

	$func01 = new Funcionario('Marcus'   , 'Chefe de Produção', 9,000.00);
	
	$func02 = new Funcionario('Aurelio'  , 'montador'         , 2,000.00, $func01);
	$func03 = new Funcionario('Cezar'    , 'conformador'      , 1,900.00, $func01);
	$func04 = new Funcionario('Nero'     , 'solador'          , 1,050.00, $func01);
	$func05 = new Funcionario('Cleopatra', 'revisora'         , 1,100.00, $func01);
	$func06 = new Funcionario('Tutan'    , 'repositor'        , 900.00  , $func01);
		
	#$func01 = new Funcionario('Marcus'   , 'Chefe de Produção', 9,000.00, ''      , array($func02, $func03, $func04, $func05, $func06));
	
#	$func01 new Funcionario('', '', 0.00, '');

	/**/
	echo "<pre>";
		var_dump($func02);
	echo "</pre>";
	/**/
?>
