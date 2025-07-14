<?php
	class doacaoController
	{
		public function buscar_doarores()
		{
			$retorno = file_get_contents("http://localhost/_doacao/services/doacaoRest.class.php?oper=Doador");
			var_dump(json_decode($retorno));
		}

		public function buscar_doacoes()
		{
			$dados = array("oper"=> "Doacao", "tipo"=>3);
			$curl = curl_init("http://localhost/_doacao/services/doacaoRest.class.php");
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$retorno = curl_exec($curl);
			curl_close($curl);

			$retorno = json_decode($retorno);
			var_dump($retorno);
		}

		public function inserir_doacao()
		{
			$client = new soapClient("http://localhost/_doacao/services/doacaoSOAP.class.php?wsdl");
			$retorno = $client -> inserirdoacao('2025-07-31', 'Aniversário do Anderson', 1, 4);
			echo json_decode($retorno);
		}
	}
?>