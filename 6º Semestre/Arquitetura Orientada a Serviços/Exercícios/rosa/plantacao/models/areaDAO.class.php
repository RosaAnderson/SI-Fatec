<?php
	class areaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
        public function inserir($area)
		{
			$sql = "	INSERT INTO area
						(
							medida,
							unidade,
							latitude,
							longitude
						)
						VALUES
						(?, ?, ?, ?)";
			try
			{
				$stm = $this -> db -> prepare($sql);

				$stm -> bindValue(1, $area -> getMedida());
				$stm -> bindValue(2, $area -> getUnidade());
				$stm -> bindValue(3, $area -> getLatitude());
				$stm -> bindValue(4, $area -> getLongitude());
				$stm -> execute();
				
                $this -> db = null;

				return "Área inserida com sucesso";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao inserir área";
			}
		}
	}
?>