<?php
	use Firebase\JWT\JWT;
	use Firebase\JWT\Key;

	require 'vendor/autoload.php';

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

		public function Login($user, $password)
		{
			if(isset($user) && isset($password))
			{
				if($user == "Vania" && $password == "123")
				{
					//$this -> autenticado = true;
					//gerar token
					$chaveSecreta = 'segredo';

					$payload =
								[
									'iss' => 'http://localhost/editora/services',
									'aud' => '//localhost/livraria',
									'iat' => time(),
									'exp' => time() + 3600,
									'user_id' => 123
								];

					$jwt = JWT::encode($payload, $chaveSecreta, "HS256");
					return json_encode($jwt);
				}
				else
				{
					return json_encode("Verifique as credenciais!");
				}
			}
			else
			{
				return json_encode("Credenciais não informadas!");
			}
		}

		public function FornecerCatalogo()
		{
			$livroDAO = new livroDAO();
			$retorno = $livroDAO -> todos_livros();
			return json_encode($retorno);
		}

		public function livros_por_genero($generoDescritivo, $token)
		{
			$this -> VerificarToken($token);

			if($this -> autenticado == true)
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

		public function VerificarToken($token)
		{
			// 
			$token = json_decode($token);

			try
			{
				$decoded = JWT::decode($token, new key("segredo", 'HS256'));

				$this ->  autenticado = true;
			}
			catch(ExpiredException $e)
			{
				$this -> autenticado = false;
			}
			catch(Exception $e)
			{
				$this -> autentidado = false;
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