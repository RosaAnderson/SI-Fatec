<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loja</title>
	</head>
	<body>
		<h1>Lista de Categorias</h1>
		<table border="1">
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
								<a href='editar.php?id={$dado->idcategoria}'>Alterar</a>
								
								&nbsp;&nbsp;
								
								<a href='excluir.php?id={$dado->idcategoria}'>Excluir</a>
								
								&nbsp;&nbsp;";
								if($dado->status == "Ativo")
								{
									echo "<a href='alterar_status.php?id={$dado->idcategoria}&status=Inativo'>Inativar</a>";
								}
								else
								{
									echo "<a href='alterar_status.php?id={$dado->idcategoria}&status=Ativo'>Ativar</a>";
								}
						echo "</td>
						  </tr>";
				}//fim do foreach
			?>
		</table>
		<br><a href="form_categoria.php">Nova Categoria</a>
	</body>
</html>