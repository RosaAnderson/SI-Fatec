<?php
	class livroController
	{
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
			
			$aut_parm = new stdClass();
			$aut_parm->user = "Anderson";
			$aut_parm->password = "321";
			
			$header_param = new soapVar($aut_parm, SOAP_ENC_OBJECT);
			
			$header = new SoapHeader("editora", "security", $header_param, false);
			
			$client->__setSoapHeaders(array($header));
			
			$retorno = $client->livros_por_genero("Romance");
			
			
			$retorno = json_decode($retorno);
			
			
			require_once "views/listar_livros.php";
		}

		public function buscar_por_autor()
		{
			$client = new SoapClient("http://localhost/editora/services/editoraSOAP.class.php?wsdl");
			
			$aut_parm = new stdClass();
			$aut_parm->user = "Anderson";
			$aut_parm->password = "321";
			
			$header_param = new soapVar($aut_parm, SOAP_ENC_OBJECT);
			
			$header = new SoapHeader("editora", "security", $header_param, false);
			
			$client->__setSoapHeaders(array($header));
			
			$retorno = $client->livros_por_autor("Dante Alighieri");
			
			
			$retorno = json_decode($retorno);
			
			
			require_once "views/listar_livros.php";
		}
	}
?>