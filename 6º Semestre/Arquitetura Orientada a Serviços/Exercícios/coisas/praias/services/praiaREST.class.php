<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/praiaDAO.class.php";
	require_once "../models/Praia.class.php";

	
	class praiaREST
	{
		public function Praias()
		{
			$praiaDAO = new praiaDAO();
			$retorno = $praiaDAO->buscar_praias();
			return json_encode($retorno);
		}
		public function Praias_por_ranking($ranking)
		{
			$praia = new Praia(ranking:$ranking);
			$praiaDAO = new praiaDAO();
			$retorno = $praiaDAO->buscar_praias_ranking($praia);
			return json_encode($retorno);
		}
	}//fim da classe
	$obj = new praiaREST();
	if($_GET)
	{
		if($_GET["oper"] == "Praias")
		{
			$ret = $obj->Praias();
			exit($ret);
		}
		
	}
	if($_POST)
	{
		if($_POST["oper"] == "Praias_por_ranking")
		{
			$ret = $obj->Praias_por_ranking($_POST["ranking"]);
        	exit($ret);
        }
	}
?>