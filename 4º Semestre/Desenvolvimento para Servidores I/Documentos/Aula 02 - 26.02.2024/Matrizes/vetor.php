<?php
	$vet = array("Pedro", 15, 45.7);
	
	for($x = 0; $x < count($vet); $x++)
	{
		echo "$vet[$x]<br>";
	}
	
	echo "<br><br>";
	
	foreach($vet as $valor)
	{
		echo "$valor<br>";
	}
?>