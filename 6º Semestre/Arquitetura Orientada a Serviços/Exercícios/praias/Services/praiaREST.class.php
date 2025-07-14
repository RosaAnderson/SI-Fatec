<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/praiaDAO.class.php";
	require_once "../models/praia.class.php";
	require_once "../models/feedback.class.php";
	
	class praiaRest
	{
		public function Praias()
		{
			$praiaDAO = new praiaDAO();
			$retorno = $praiaDAO -> buscar_praias();
			return json_encode($retorno);
		}

		public function Praias_por_Ranking($ranking)
		{
			$praia = new Praia(ranking:$ranking);

			$praiaDAO = new praiaDAO();
			$retorno = $praiaDAO -> buscar_por_ranking($praia);
			return json_encode($retorno);
		}
	}

	$obj = new praiaRest();
	if($_GET)
	{
		if($_GET["oper"] == "Praias")
		{
			$ret = $obj -> Praias();
			exit($ret);
		}
			
		if($_GET["oper"] == "Praias_por_Ranking")
		{
			$ret = $obj -> Praias_por_Ranking($_GET["ranking"]);
			exit($ret);
		}
	}

	if($_POST)
	{
		if($_POST["oper"] == "Praias_por_Ranking")
		{
			$ret = $obj -> Praias_por_Ranking($_POST["ranking"]);
			exit($ret);
		}
	}
?>