<?php
	$msg = array('', '', '');

	if ($_POST)
	{
		$erro = false;
		
		if (empty($_POST['email']))
		{
			$erro = true;
			
			$msg[0] = 'E-mail inválido ou não informado';
		}
		
		if (empty($_POST['senha']))
		{
			$erro = true;
			
			$m[0] = 'Senha não informada';
		}
		
		if (!$erro)
		{
			require_once '../models/c.conexao.php';
			require_once '../models/c.usuario.php';
			require_once '../models/c.usuarioDAO.php';
			
			$usuario = new Usuario(	email:    $_POST['email'],
									senha:md5($_POST['senha']));
									
			$usuarioDAO = new usuarioDAO();
									
			$retorno = $usuarioDAO -> vUser($usuario);
			
			if (count($retorno))
			{
				if (!isset($_SESSION))
				{
					session_start();
				}
				
				$_SESSION['nome']		= $retorno[0] -> nome;
				$_SESSION['idusuario']	= $retorno[0] -> idusuario;
				$_SESSION['tipo']		= $retorno[0] -> tipo;
				
				header('location:index.php');
			}
			else
			{
				$msg[2] = 'Usuário e/ou Senha Inválidos';
			}
		}
	}
	
	require_once 'header.php';
?>

	<div class = "content">
		<div class = "container">
		
			<?php
				if ($msg[0] <> '')
					echo "
						<div class='alert alert-danger' role='alert'>
							$msg[2];
						</div>
					";
			?>
			
			<h2>Login</h2>
				<form action="#" method="post">
					<label for="email">E-Mail:</label>
					<input type="email" name="email" id="email">
					<div>
						<br>
						<?php echo $msg[0];?>
					</div>
					<br><br>
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha">

					<div>
						<br>
						<?php echo $msg[1];?>
					</div>

					<br><br>
					<input type="submit" value="Login">
				</form>
				
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

		</div>
	</div>
	
<?php
	require_once 'footer.html';
?>
