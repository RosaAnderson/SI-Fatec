<?php
	class praiaController
	{
		public function buscar_praias()
		{
			$retorno = file_get_contents("http://localhost/praias/services/praiaRest.class.php?oper=Praias");
			var_dump(json_decode($retorno));
		}

		public function buscar_praias_por_ranking()
		{
			$dados = array("oper"=> "Praias_por_ranking", "ranking"=>4);
			$curl = curl_init("http://localhost/praias/services/praiaRest.class.php");
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$retorno = curl_exec($curl);
			curl_close($curl);

			$retorno = json_decode($retorno);
			var_dump($retorno);
		}

		public function inserir_feedback()
		{
			$client = new soapClient("http://localhost/praias/services/praiaSOAP.class.php?wsdl");
			$retorno = $client->inserirFeedback(1,10);
			echo json_decode($retorno);
		}
	}

/*
public function inserir_ranking()
{
    $dados = array(
        "oper" => "Inserir_ranking",
        "id_praia" => 1,     // ID da praia que você quer alterar
        "ranking" => 5       // Novo valor do ranking
    );

    $curl = curl_init("http://localhost/praias/services/praiaRest.class.php");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $resposta = curl_exec($curl);
    curl_close($curl);

    $resultado = json_decode($resposta);
    var_dump($resultado);
}
*/

?>