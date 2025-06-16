<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/livroDAO.class.php";
	require_once "../models/Livro.class.php";
	require_once "../models/Genero.class.php";
	//usar essas duas linhas abaixo quando não houver wsdl
	//$opcao = array("uri"=>"http://localhost");
	//$server = new soapServer(null, $opcao);
	
	$server = new soapServer("editora.wsdl");
	
	class EditoraSOAP
	{
		private $autenticado = false;
		public function security($header)
		{
			if(isset($header->user) && isset($header->password))
			{
				if($header->user == "Vania" && $header->password == "123")
				{
					$this->autenticado = true;
				}
			}
		}
		public function FornecerCatalogo()
		{
			$livroDAO = new livroDAO();
			$retorno =$livroDAO->todos_livros();
			return json_encode($retorno);
		}
		public function livros_por_genero($generoDescritivo)
		{
			if($this->autenticado == true)
			{
			$genero = new Genero(descritivo:$generoDescritivo);
			
			$livro = new Livro(genero:$genero);
			
			$livroDAO = new livroDAO();
			
			$retorno = $livroDAO->buscar_livros_genero($livro);
			
			return json_encode($retorno);
			}
			else
			{
				return json_encode("Acesso Negado");
			}
		}
	}//fim da classe
	$server->setObject(new EditoraSOAP());
	$server->handle();
	/*$obj = new EditoraSOAP();
	$ret = $obj->FornecerCatalogo();
	echo "<pre>";
	var_dump($ret);
	echo "</pre>";*/
?>