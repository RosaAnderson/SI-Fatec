<?php
	class feedbackDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
        public function inserir($feedback)
		{
			$sql = "INSERT INTO feedback (id_praia, nota) VALUES (?,?)";
			try
			{
				$stm = $this -> db -> prepare($sql);

				$stm -> bindValue(1, $feedback -> getPraia() -> getIdPraia());
				$stm -> bindValue(2, $feedback -> getNota());
				$stm -> execute();
				
                $this -> db = null;

				return "Feedback inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao inserir feedback";
			}
		}
	}
?>