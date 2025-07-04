<?php
	date_default_timezone_set("America/Sao_Paulo");
	require_once "vendor/autoload.php";
	$mpdf = new \Mpdf\mpdf();
	
	$header = "<h1>Lista de Praias - <span>" . date("d/m/Y") . "</span></h1>";
	
	$body =
		"<table>
			<tr>
			 	<th>Loja</th>
			 	<th>Game</th>
			 	<th>Console</th>
			</tr>";
			 
	foreach($game as $dado)
	{
		$body = $body .
			"<tr>
				<td>{$dado -> nome_loja}</td>
	            <td>{$dado -> nome_game}</td>
				<td>{$dado -> nome_console}</td>
			</tr>";
	}
	
	$body = $body .
		"</table>";
	
	$html = $header . $body;
	
	$estilo = file_get_contents("style/estilo.css");

	$mpdf -> WriteHTML($estilo, 1);
	
	$mpdf -> WriteHTML($html);
	$mpdf -> Output();
?>