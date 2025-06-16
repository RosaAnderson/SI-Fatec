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
	  
		<br><br>
		
		<h1 class="row justify-content-center align-items-center">Produto</h1><br>
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
			<?php
				require_once '../models/c.conexao.php';
				#require_once '../models/c.produtos.php';
				require_once '../models/c.produtoDAO.php';
				
					$produtoDAO = new ProdutoDAO();
				
					//listar categoria
					$retorno = $produtoDAO->buscar_todos();
				
					foreach($retorno as $dado)
					{
						$preco = number_format($dado -> preco, 2, ",", ".");
						
						echo "
							<tr>
								<td>{$dado -> nome}</td>
								<td>{$preco}</td>
								<td>{$dado -> estoque}</td>
								<td>{$dado -> descritivo}</td>

								
								<td>
								
									<a href='editar_produto.php?id={$dado->idproduto}' class='btn btn-warning'>Alterar</a>
								
									&nbsp;&nbsp;
								
									<a href='excluir_produto.php?id={$dado->idproduto}'class='btn btn-danger'>Excluir</a>
								
									&nbsp;&nbsp;
						";
								
//									if ($dado -> status == '1')
//									{
//										echo "<a href='status_categoria.php?id={$dado->idcategoria}&status=0'class='btn btn-warning'>Inativar</a>";
//									}
//									else
//									{
//										echo "<a href='status_categoria.php?id={$dado->idcategoria}&status=1'class='btn btn-warning'>Ativar</a>";
//									}
//
						echo "								
								</td>
							</tr>
						";
					}//fim do foreach
			?>
		</table>
	</div>
</div>
<?php
	require_once "footer.html";
?>