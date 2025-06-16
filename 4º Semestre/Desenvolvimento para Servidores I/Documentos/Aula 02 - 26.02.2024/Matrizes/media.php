<?php
	if($_GET)
	{
		/*echo "<pre>";
		var_dump($_GET["vet"]);
		echo "</pre>";*/
		$dados = $_GET["vet"];
		echo "{$dados[0]} sua média é " . (($dados[1] + $dados[2])/2);
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Média</title>
	</head>
	<body>
		<h3>Entre como os dados do aluno</h3>
		<form>
			<table border="1">
				<thead>
					<tr>
						<th>Nome</th>
						<th>P1</th>
						<th>P2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="vet[]"></td>
						<td><input type="number" min="0" max="10" name="vet[]"></td>
						<td><input type="number" min="0" max="10" name="vet[]"></td>
					</tr>
				</tbody>
			</table>
			<br><input type="submit" value="Enviar">
		</form>
	</body>
</html>