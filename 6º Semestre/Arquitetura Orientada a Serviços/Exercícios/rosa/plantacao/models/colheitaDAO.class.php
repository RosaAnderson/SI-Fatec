<?php
	class colheitaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
        public function inserir($colheita)
		{
			$sql = "	INSERT INTO colheita
						(
							idarea,
							idplantacao,
							data_colheita,
							quantidade,
							unidade
						)
						VALUES
						(?, ?, ?, ?, ?)";
			try
			{
				$stm = $this -> db -> prepare($sql);

				$stm -> bindValue(1, $colheita -> getArea() -> getIdArea());
				$stm -> bindValue(2, $colheita -> getPlantacao() -> getIdPlantacao());
				$stm -> bindValue(3, $colheita -> getDataColheita());
				$stm -> bindValue(4, $colheita -> getQuantidade());
				$stm -> bindValue(5, $colheita -> getUnidade());
				$stm -> execute();

				$this -> db = null;

				return "Colheita inserida com sucesso";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao inserir Colheita";
			}
		}
	}
?>