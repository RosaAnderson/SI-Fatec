<?php
	if (!isset($_SESSION))
	{
		session_start();
	}

var_dump($_SESSION);

?>
<!doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<title>Loja</title>
		</head>
	
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="index.php">Home</a>
							</li>
									<?php
										//if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'A')
										{
											echo "
												<li class='nav-item dropdown'>
													<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Categorias</a>
													<ul class='dropdown-menu'>
														<li><a class='dropdown-item' href='form_categoria.php'>Cadastrar</a></li>
														<li><a class='dropdown-item' href='#'>Editar</a></li>
														<li><hr class='dropdown-divider'></li>
														<li><a class='dropdown-item' href='listar_categorias.php'>Listar</a></li>
													</ul>
												</li>
												<li class='nav-item dropdown'>
													<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Produtos</a>
													<ul class='dropdown-menu'>
														<li><a class='dropdown-item' href='form_produto.php'>Cadastrar</a></li>
														<li><a class='dropdown-item' href='#'>Editar</a></li>
														<li><hr class='dropdown-divider'></li>
														<li><a class='dropdown-item' href='listar_produtos.php'>Listar</a></li>
													</ul>
												</li>
											";
										}
									
										if (!isset($_SESSION['idusuario']))
										{
											echo "<li class='nav-item'>
												      <a class='nav-link' href='login.php'>Entrar</a>
												  </li>";
										}
										else
										{											
											echo "<li class='nav-item'>
												      <a class='nav-link' href='logout.php'>Sair</a>
												  </li>";
										}
									?>
								</ul>
							</div>
						</div>
					</nav>
					
					
					
					
<!--
########################################################################################

<!doctype html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<title>Lojaria</title>
			
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
			
			</head>
				<body>
					<nav class="navbar navbar-expand-lg bg-body-tertiary">
						<div class="container-fluid">
   
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
	
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="index.php">Home</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="form_categoria.php">Cadastrar</a></li>
											<li><a class="dropdown-item" href="#">Editar</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="listar_categorias.php">Listar</a></li>
										</ul>
									</li>
-->