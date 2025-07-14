<?php
	class plantacaoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
        public function buscar_plantacao()
		{
			$sql = "SELECT * FROM plantacao";
			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> execute();
				
                $this -> db = null;

				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao buscar as plantações";
			}
		}
	}
?>