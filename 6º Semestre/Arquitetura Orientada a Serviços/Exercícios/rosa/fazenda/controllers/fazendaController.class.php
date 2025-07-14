<?php
	class fazendaController
	{
		public function mostrar_plantacoes()
		{
			$client = new SoapClient("http://localhost/plantacao/services/plantacaoSOAP.class.php?wsdl");
			$retorno = $client -> mostrar_plantacoes();
			$retorno = json_decode($retorno);
			require_once "views/mostrar_plantacoes.php";
		}

		public function InserirArea()
		{

			$retorno = $client -> InserirArea(	0,
												12000,
												'hc',
												'41+52+63',
												'36+98-70');
														
			$retorno = json_decode($retorno);
			
			/* */
		}

		public function InserirColheita()
		{
			$client = new SoapClient("http://localhost/plantacao/services/plantacaoSOAP.class.php?wsdl");

			$retorno = $client -> InserirColheita(	0,
													'2025-07-25',
													40000,
													'Tol',
													1,
													1
												);
			
			$retorno = json_decode($retorno);
			
//			require_once "views/mostrar_plantacoes.php";
		}
	
	}
?>