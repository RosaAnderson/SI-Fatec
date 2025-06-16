<!doctype html>
<html>
	<head>
		<title>Livraria</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Livros</h1>
		<?php
		if(is_array($retorno))
		{
		?>
		<table border="1">
			<tr>
				<th>Título</th>
				<th>Sinopse</th>
				<th>Preço</th>
			</tr>
			<?php
				foreach($retorno as $dado)
				{
					echo "<tr>
						<td>{$dado->titulo}</td>
						<td>{$dado->sinopse}</td>
						<td>{$dado->preco}</td>
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