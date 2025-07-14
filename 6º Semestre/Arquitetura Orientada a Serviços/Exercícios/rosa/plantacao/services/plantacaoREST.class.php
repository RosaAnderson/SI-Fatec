<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/plantacaoDAO.class.php";
	require_once "../models/plantacao.class.php";
	require_once "../models/colheitaDAO.class.php";
	require_once "../models/colheita.class.php";
	require_once "../models/areaDAO.class.php";
	require_once "../models/area.class.php";
	
	class AreaRest
	{
		public function Area()
		{
			$areaDAO = new areaDAO();
			$retorno = $areaDAO -> inserir(0,
											12000,
											'hc',
											'41+52+63',
											'36+98-70');
			return json_encode($retorno);
		}
	}


	$obj = new AreaRest();

	if($_GET)
	{
		if($_GET["oper"] == "Area")
		{
			$ret = $obj -> Area();
			exit($ret);
		}
	}
/*
	if($_POST)
	{
		if($_POST["oper"] == "Praias_por_Ranking")
		{
			$ret = $obj -> Praias_por_Ranking($_POST["ranking"]);
			exit($ret);
		}
	}
/**/	


/*
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['oper'])) {
    switch ($_POST['oper']) {

        // ... outros cases ...

        case 'Inserir_ranking':
            $id_praia = $_POST['id_praia'] ?? 0;
            $ranking = $_POST['ranking'] ?? 0;

            // Aqui você conecta e atualiza o ranking no banco
            require_once 'conexao.php'; // exemplo
            $pdo = Conexao::conectar();

            $sql = "UPDATE praia SET ranking = :ranking WHERE id_praia = :id_praia";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':ranking', $ranking, PDO::PARAM_INT);
            $stmt->bindParam(':id_praia', $id_praia, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo json_encode(["status" => "sucesso", "mensagem" => "Ranking atualizado"]);
            } else {
                echo json_encode(["status" => "erro", "mensagem" => "Falha ao atualizar ranking"]);
            }

            break;

        // ...
    }
}
*/
?>


