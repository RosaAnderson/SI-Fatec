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
			$doacao = new Doacao(tipo:$tipo);
			$doacaoDAO = new doacaoDAO();
			$retorno = $doacaoDAO -> buscar($doacao);
			return json_encode($retorno);
		}
	}
/*
		public function Praias_por_ranking($ranking)
		{
			$praia = new Praia(ranking:$ranking);
			$praiaDAO = new praiaDAO();
			$retorno = $praiaDAO->buscar_praias_ranking($praia);
			return json_encode($retorno);
		}
*/

	$obj = new doadorREST();

/*
	if($_GET)
	{
		if($_GET["oper"] == "Doador")
		{
			$ret = $obj -> Doador();
			exit($ret);
		}
	}
*/
	if($_GET)
	{
		if($_GET["oper"] == "Doacao")
		{
			$ret = $obj -> Doacao($_GET["tipo"]);
        	exit($ret);
        }
	}
?>






