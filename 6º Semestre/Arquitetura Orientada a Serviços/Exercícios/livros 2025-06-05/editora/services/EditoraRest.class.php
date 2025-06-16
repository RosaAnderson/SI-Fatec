<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/livroDAO.class.php";
	require_once "../models/Livro.class.php";
	require_once "../models/Genero.class.php";
	require_once "../models/Autor.class.php";
	
	class EditoraRest
	{
		public function FornecerCatalogo()
		{
			$livroDAO = new livroDAO();
			$retorno = $livroDAO->todos_livros();
			return json_encode($retorno);
		}

		public function livros_por_genero($generoDescritivo)
		{
			$genero = new Genero(descritivo:$generoDescritivo);
			$livro = new Livro(genero:$genero);
			$livroDAO = new livroDAO();
			$retorno = $livroDAO->buscar_livros_genero($livro);
			return json_encode($retorno);
		}

		//buscar os livros por autor
		public function buscar_livros_autor($nome_autor)
		{
			$autor = new Autor(nome:$nome_autor);
			$livro = new livro(autores:array($autor));
			$livroDAO = new livroDAO();
			$retorno = json_encode($livroDAO->livros_Autor($livro));
			return $retorno;
		}
		
	}//fim da classe

	$obj = new EditoraRest();
	
	if($_GET)
	{
		if(isset($_GET["metodo"]))
		{
			if($_GET["metodo"] == "FornecerCatalogo")
			{
				$ret = $obj->FornecerCatalogo();
				exit($ret);
			}
			
			if($_GET["metodo"] == "livros_por_genero")
			{
				if(isset($_GET["genero"]))
				{
					$ret = $obj->livros_por_genero($_GET["genero"]);
					exit($ret);
				}
				else
				{
					exit(json_encode("Faltou parâmetro"));
				}
			}
		}
		else
		{
			exit(json_encode("Faltou parâmetro"));
		}
	}
	if($_POST)
	{
		if(isset($_POST["metodo"]))
		{
			if($_POST["metodo"] == "buscar_livros_autor")
			{
				$ret = $obj->buscar_livros_autor($_POST["nome"]);
				exit($ret);
			}
		}
	}
?>