<?php
	if (!isset($_SESSION))
		session_start();

	class livroController
	{
		public function Login()
		{
			$client = new SoapClient("http://localhost/editora/services/editoraSOAP.class.php?wsdl");
			
			$retorno = $client -> Login("Vania", "123");

			$_SESSION["token"] = $retorno;

			var_dump($retorno);
		}

		public function buscar_catalogo()
		{
			//acessar o serviço da editora
			//usar as duas linhas abaixo quando não houver wsdl
			//$opcoes = array("uri"=>"http://localhost", "location"=>"http://localhost/editora/services/EditoraSOAP.class.php");
			
			//$client = new SoapClient(null, $opcoes);
			
			$client = new SoapClient("http://localhost/editora/services/editoraSOAP.class.php?wsdl");
			$retorno = $client->FornecerCatalogo();
			$retorno = json_decode($retorno);
			require_once "views/listar_livros.php";
		}

		public function buscar_por_genero()
		{
			$client = new SoapClient("http://localhost/editora/services/editoraSOAP.class.php?wsdl");
			
			/*
			$aut_parm = new stdClass();
			$aut_parm->user = "Vania";
			$aut_parm->password = "123";
						
			$header_param = new soapVar($aut_parm, SOAP_ENC_OBJECT);
			
			$header = new SoapHeader("editora", "security", $header_param, false);
			
			$client->__setSoapHeaders(array($header));
			*/

			$retorno = $client->livros_por_genero("Romance", $_SESSION["token"]);
			
			$retorno = json_decode($retorno);
			
			require_once "views/listar_livros.php";
		}
		public function catalogoRest()
		{
			$retorno = file_get_contents("http://localhost/editora/services/EditoraRest.class.php?metodo=FornecerCatalogo");
			
			$retorno = json_decode($retorno);
			require_once "views/listar_livros.php";
		}
		
		public function buscar_por_generoRest()
		{
			$retorno = file_get_contents("http://localhost/editora/services/EditoraRest.class.php?metodo=livros_por_genero&genero=Romance");
			$retorno = json_decode($retorno);
			require_once "views/listar_livros.php";
		}

		public function buscar_por_autorRest()
		{
			$dados = array("metodo"=>"buscar_livros_autor", "nome"=>"Alexandre Hubmer");

			$curl = curl_init ("http://localhost/editora/services/EditoraRest.class.php");

			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			
			$retorno = json_decode(curl_exec($curl));

			curl_close($curl);

			require_once "views/listar_livros.php";
		}
	}
?>