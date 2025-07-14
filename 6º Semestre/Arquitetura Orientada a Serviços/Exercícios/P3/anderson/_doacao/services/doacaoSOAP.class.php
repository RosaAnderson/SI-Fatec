<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/doacaoDAO.class.php";
	require_once "../models/doacao.class.php";
	require_once "../models/doador.class.php";
	require_once "../models/tipo.class.php";
	
	$server = new soapServer("doacao.wsdl");

	class doacaoSOAP
	{
		public function inserirdoacao(	$Data_Doacao,
										$Descricao,
										$Doador,
										$Tipo)
		{
			$odoador = new Doador($Doador);
			$otipo   = new Tipo($Tipo);

			$doacao = new Doacao(0, $Data_Doacao, $Descricao, $odoador, $otipo);

			$doacaoDAO = new doacaoDAO();
			$retorno = $doacaoDAO -> inserir($doacao);
			return json_encode($retorno);
		}
	}
	$server -> setObject(new doacaoSOAP());
	$server -> handle();
?>
