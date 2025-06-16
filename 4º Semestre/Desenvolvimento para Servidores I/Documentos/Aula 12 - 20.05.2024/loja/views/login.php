<?php
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
		<h1>Login</h1>
		<form action="#" method="post">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email">
			<br><br>
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</div>
   </div>
<?php
	require_once "footer.html";
?>