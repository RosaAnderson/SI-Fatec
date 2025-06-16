<?php
	if($_POST)
	{
		/*
		//echo "{$_POST['nome']}<br>";
		echo $_POST["nome"] . "<br>";//o ponto serve para concatenar elementos no php
		echo $_POST["email"];
		*/
		
		//validação
		if(empty($_POST["nome"]))
		{
			echo "<h3>Preencha o nome</h3><br>";
		}
		
		if($_POST["email"] == "")
		{
			echo "<h3>Preencha o e-mail</h3><br>";
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulário</title>
		<style>
			h3{color:red;}
		</style>
	</head>
	<body>
		<h1>Formulário</h1>
		<form action="#" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome">
			<br><br>
			<label for="email">E-mail</label>
			<input type="email" name="email" id="email">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
