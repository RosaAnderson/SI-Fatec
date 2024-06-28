<?php
	require_once "header.php";
	require_once "verificar_permissao.php";
?>
	<div class="content">
	<div class="container">
		<br><br><h1>Lista de Categorias</h1><br>
		<table class="table table-striped">
			<tr>
				<th>Código</th>
				<th>Categoria</th>
				<th>Status</th>
				<th>Ações</th>
			</tr>
			<?php
				require_once "../models/Conexao.class.php";
				require_once "../models/categoriaDAO.class.php";
				
				
				$categoriaDAO = new categoriaDAO();
				//listar categoria
				$retorno = $categoriaDAO->buscar_todas();
				foreach($retorno as $dado)
				{
					echo "<tr>
							<td>{$dado->idcategoria}</td>
							<td>{$dado->descritivo}</td>
							<td>{$dado->status}</td>
							<td>
								<a href='editar.php?id={$dado->idcategoria}' class='btn btn-warning'>Alterar</a>
								
								&nbsp;&nbsp;
								
								<a href='excluir.php?id={$dado->idcategoria}' class='btn btn-danger'>Excluir</a>
								
								&nbsp;&nbsp;";
								if($dado->status == "Ativo")
								{
									echo "<a href='alterar_status.php?id={$dado->idcategoria}&status=Inativo'class='btn btn-warning'>Inativar</a>";
								}
								else
								{
									echo "<a href='alterar_status.php?id={$dado->idcategoria}&status=Ativo' class='btn btn-warning'>Ativar</a>";
								}
						echo "</td>
						  </tr>";
				}//fim do foreach
			?>
		</table>
		<br><a href="form_categoria.php"   class="btn btn-success">Nova Categoria</a>
	</div>
</div>
<?php
	require_once "footer.html";
?>