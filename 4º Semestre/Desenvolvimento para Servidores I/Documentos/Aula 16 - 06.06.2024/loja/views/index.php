<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/categoriaDAO.class.php";
	require_once "../models/categoria.class.php";
	require_once "../models/produtoDAO.class.php";
	require_once "header.php";
?>
	<div class="content">
	 	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<?php
				
				//buscar categorias BD
						
				$categoria = new Categoria(status:"Ativo");
						
				$categoriaDAO = new categoriaDAO();
						
				$retorno = $categoriaDAO->buscar_categorias_ativas($categoria);
	
				foreach($retorno as $dado)
				{
					echo "<li class='nav-item'>
						  <a class='nav-link'  href='#'>{$dado->descritivo}</a>
						  </li>";
				}
			?>
			</ul>
		 </div>
		 </div>
		 </nav>
		 <div class="container" id="container">
			<div id="produtos">
				<?php
					$produtoDAO = new produtoDAO();
					$produtos = $produtoDAO->buscar_todos();
					foreach($produtos as $produto)
					{
						$preco = number_format($produto->preco, 2, ",", ".");
						echo "<div class='card' style='width: 18rem;'>
					    <img src='../produtos/{$produto->imagem}' class='card-img-top' alt='{$produto->nome}'>
					    <div class='card-body'>
						<h5 class='card-title'>{$produto->nome} - R$ $preco</h5>
						<a href='#' class='btn btn-primary'>Comprar</a>
					    </div>
					    </div>";
					}
				?>
			</div>
		 </div>
   </div>
  	
<?php
	require_once "footer.html";
?>