<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/doadorDAO.class.php";
	require_once "../models/doador.class.php";
	require_once "../models/doacaoDAO.class.php";
	require_once "../models/doacao.class.php";
	require_once "../models/tipo.class.php";

	
	class doadorREST
	{
		public function Doador()
		{
			$doadorDAO = new doadorDAO();
			$retorno = $doadorDAO -> buscar();
			return json_encode($retorno);
		}

		public function Doacao($tipo)
		{
			$otipo = new Tipo($tipo);

			$doacao = new Doacao(idtipo:$otipo);
			$doacaoDAO = new doacaoDAO();
			$retorno = $doacaoDAO -> buscar($doacao);
			return json_encode($retorno);
		}
	}

	$obj = new doadorREST();

	if($_GET)
	{
		if($_GET["oper"] == "Doador")
		{
			$ret = $obj -> Doador();
			exit($ret);
		}
	}

	if($_POST)
	{
		if($_POST["oper"] == "Doacao")
		{
			$ret = $obj -> Doacao($_POST["tipo"]);
        	exit($ret);
        }
	}
?>






