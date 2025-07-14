<?php
	class praiaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
	
		public function buscar_praias()
		{
			$sql = "SELECT * FROM praia";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar as praias";
			}
		}//buscar_praias
		public function buscar_praias_ranking($praia)
		{
		$sql = "SELECT * FROM praia WHERE ranking = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $praia->getRanking());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar as praias por ranking";
			}
		}
	}
?>