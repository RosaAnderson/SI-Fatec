<?php
	$mat = array(array("Pedro", 15, 45.7),
				 array("Maria", 20, 57.2),
				 array("Paulo", 25, 75.4),
				 array("Vânia", 12, 27.2)	
				);
	
	for($linha = 0; $linha < 4; $linha++)
	{
		for($coluna = 0; $coluna < 3; $coluna++)
		{
				//echo "{$mat[$linha][$coluna]}<br>";
				echo $mat[$linha][$coluna] . "<br>";
		}
	}
	
	echo "<br><br>";
	
	foreach($mat as $vet)
	{
		/*echo "<pre>";
		var_dump($vet);
		echo "</pre>";*/
		
		foreach($vet as $valor)
		{
			echo "$valor<br>";
		}
	}
?>