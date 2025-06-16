<?php
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
	  <?php
			if(isset($_GET["msg"]))
			{
				echo "<div class='alert alert-success' role='alert'>{$_GET['msg']}</div>";
			}
	 ?>
	  
		<br><br><h1 class="row justify-content-center align-items-center">Produto</h1><br>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
			<?php
				require_once "../models/Conexao.class.php";
				require_once "../models/produtoDAO.class.php";
				$produtoDAO =  new produtoDAO();
				$retorno = $produtoDAO->buscar_todos();
				foreach($retorno as $dados)
				{
					$preco = number_format($dados->preco,2,",",".");
					
					echo "<tr>
					      <td>{$dados->nome}</td>
						  <td>$preco</td>
						  <td>{$dados->estoque}</td>
						  <td>{$dados->descritivo}</td>
						  <td>
						  
						  <a href='edit_produto.php?idproduto={$dados->idproduto}' class='btn btn-warning'>Alterar</a>
						  
						  &nbsp;&nbsp;
						  
						  <a href='#' class='btn btn-danger'>Excluir</a>
						  
						  </td>
						 </tr>"; 
						  
				}
				
				
			?>
		</table>
		<br>
		<a  class="btn btn-success" href="form_produto.php">Novo produto</a>
		
	</div>
</div>
<?php
	require_once "footer.html";
?>