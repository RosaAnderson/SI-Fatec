<?php
$mat = array(array("nome"=>"Pedro", "idade"=>15, "peso"=>45.7),
			 array("nome"=>"Maria","idade"=>20,"peso"=>57.2),
			 array("nome"=>"Paulo", "idade"=>25,"peso"=> 75.4),
			 array("nome"=>"Vânia","idade"=> 12,"peso"=> 27.2)	
			);
	
	for($linha = 0; $linha < 4; $linha++)
	{
		echo "{$mat[$linha]['nome']}<br>";
		echo "{$mat[$linha]['idade']}<br>";
		echo "{$mat[$linha]['peso']}<br>";
		
	}
	
	echo "<br><br>";
	
	foreach($mat as $vet)
	{
		echo "{$vet['nome']}<br>{$vet['idade']}<br>{$vet['peso']}<br>";		
		foreach($vet as $indice=>$valor)
		{
			echo "$indice: $valor<br>";
		}
	}
?>