<?php
	require_once 'header.php';
	require_once 'permissao.php';
?>
	<div class = "content">
		<div class = "container">
		
			<br> <br>
			<h2> Lista de Categorias </h2>
			
			<br>
			
			<table class='table table-striped'>
				<tr>
					<th>Código</th>
					<th>Status</th>
					<th>Categoria</th>
					<th>Ações</th>
				</tr>
				<?php
					require_once "../models/c.conexao.php";
					require_once "../models/c.categoriaDAO.php";
				
					$categoriaDAO = new CategoriaDAO();
				
					//listar categoria
					$retorno = $categoriaDAO->buscar_todas();
				
					foreach($retorno as $dado)
					{
						echo "
							<tr>
								<td>{$dado->idcategoria}</td>
								<td>{$dado->status}</td>
								<td>{$dado->descritivo}</td>
								
								<td>
									<a href='editar_categoria.php?id={$dado->idcategoria}' class='btn btn-warning'>Alterar</a>

									&nbsp;&nbsp;

									<a href='excluir_categoria.php?id={$dado->idcategoria}'class='btn btn-danger'>Excluir</a>

									&nbsp;&nbsp;
						";

									if ($dado -> status == '1')
									{
										echo "<a href='status_categoria.php?id={$dado->idcategoria}&status=0'class='btn btn-warning'>Inativar</a>";
									}
									else
									{
										echo "<a href='status_categoria.php?id={$dado->idcategoria}&status=1'class='btn btn-warning'>Ativar</a>";
									}

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
	require_once 'footer.html';
?>