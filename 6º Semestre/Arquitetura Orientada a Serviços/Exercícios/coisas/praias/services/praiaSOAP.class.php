<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/feedbackDAO.class.php";
	require_once "../models/Feedback.class.php";
	require_once "../models/Praia.class.php";
	
	$server = new soapServer("praia.wsdl");
	class praiaSOAP
	{
	public function inserirFeedback($idPraia, $nota)
	{
		$praia = new Praia($idPraia);
		$feedback = new Feedback(0, $praia, $nota);
		$feedbackDAO = new feedbackDAO();
		$retorno = $feedbackDAO->inserir($feedback);
		return json_encode($retorno);
	}
	}//fim da classe
	$server->setObject(new praiaSOAP());
	$server->handle();
	
?>