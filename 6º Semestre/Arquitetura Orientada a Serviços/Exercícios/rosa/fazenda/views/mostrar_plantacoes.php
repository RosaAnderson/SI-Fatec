<!doctype html>
<html>
	<head>
		<title>Minhas Plancações</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h2>Minhas Plantações</h2>
		<?php
		if(is_array($retorno))
		{
		?>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Tipo</th>
			</tr>
			<?php
				foreach($retorno as $dado)
				{
					echo "<tr>
							<td>{$dado -> idplantacao}</td>
							<td>{$dado -> descritivo}</td>
						</tr>";
				}
			?>
		</table>
	<?php
		}
		else
		{
			echo "<h2 >$retorno</h2>";
		}
	?>
	</body>
</html>