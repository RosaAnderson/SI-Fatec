<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/feedbackDAO.class.php";
	require_once "../models/feedback.class.php";
	require_once "../models/praia.class.php";

	$server = new soapServer("praia.wsdl");
	
	class praiaSOAP
	{
		private $autenticado = false;

        public function InserirFeedback($id_praia, $nota)
		{
            $praia = new Praia($id_praia);

            $feedback = new Feedback(0, $id_praia, $nota);

            $feedbacDAO = new FeedbackDAO();

            $retorno = $feedback -> Inserir($feedback);

            return json_encode($retorno);
		}
	}

    $server -> setObject(new praiaSOAP());
    $server -> handle();
?>