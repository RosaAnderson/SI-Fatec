<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/plantacao.class.php";
	require_once "../models/colheitaDAO.class.php";
    require_once "../models/colheita.class.php";
	//require_once "../models/area.class.php";

	$server = new soapServer("plantacao.wsdl");

	class plantacaoSOAP
	{
		public function InserirColheita(
                                        $idcolheita,
										$data_colheita,
										$quantidade,
										$unidade,
										$plantacao,
										$area		
									   )
		{
/*
            $plantacao 	= new Plantacao(1);
			$area 		= new Area(1);
*/
			$colheita = new Colheita(	0,
										'2025-09-18',
										17892,
										'Tol',
										1,
										1		
									);

			$colheitaDAO = new colheitaDAO();

			$retorno = $colheitaDAO -> Inserir($colheita);

			return json_encode($retorno);
		}
	}

    $server -> setObject(new plantacaoSOAP());
    $server -> handle();
?>
