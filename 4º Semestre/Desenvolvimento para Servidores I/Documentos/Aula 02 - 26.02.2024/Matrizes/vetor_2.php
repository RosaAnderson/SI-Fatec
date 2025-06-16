<?php
	$vet = array("nome"=>"Pedro", "idade"=>15, "peso"=>45.7);
	
	echo $vet["nome"];
	
	echo "<br><br>";
	
	foreach($vet as $indice=>$valor)
	{
		echo "$indice : $valor<br>";
	}
?>