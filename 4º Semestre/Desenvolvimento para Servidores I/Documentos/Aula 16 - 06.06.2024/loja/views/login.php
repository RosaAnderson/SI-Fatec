<?php
	$msg = array("","");
	$mensagem = "";
	if($_POST)
	{
		$erro = false;
		if(empty($_POST["email"]))
		{
			$erro = true;
			$msg[0] = "Preencha o e-mail";
		}
		if(empty($_POST["senha"]))
		{
			$erro = true;
			$msg[1] = "Preencha a senha";
		}
		if(!$erro)
		{
			require_once "../models/Conexao.class.php";
			require_once "../models/Usuario.class.php";
			require_once "../models/usuarioDAO.class.php";
			
			$usuario = new Usuario(email:$_POST["email"], senha:md5($_POST["senha"]));
			
			$usuarioDAO = new usuarioDAO();
			
			$retorno = $usuarioDAO->verificar_login($usuario);
			
			if(count($retorno) > 0)
			{
				//é usuário do sistema
				//verificar se a sessão está startada
				if(!isset($_SESSION))
				{
					session_start();
				}
				$_SESSION["nome"] = $retorno[0]->nome;
				$_SESSION["idusuario"] = $retorno[0]->idusuario;
				$_SESSION["perfil"] = $retorno[0]->perfil;
				header("location:index.php");
			}
			else
			{
				//não é usuário do sistema
				$mensagem = "Verifique e-mail/senha";
			}

		}//if erro
	}//if post
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
	 <?php
		if($mensagem != "")
		{
		  echo "<div class='alert alert-danger' role='alert'>
			$mensagem;
		  </div>";
		}
	  ?>
		<br>
		<h1>Login</h1>
		<br><br>
		<form action="#" method="post">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email">
			<div style="color:red;font-size:10px;"><?php echo $msg[0];?></div>
			<br><br>
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha">
			<div style="color:red;font-size:10px;"><?php echo $msg[1];?></div>
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</div>
   </div>
<?php
	require_once "footer.html";
?>