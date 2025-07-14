<?php
	class consoleDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		
		public function buscar_console()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM console";
			try
			{
				//preparar frase
				$stm = $this -> db -> prepare($sql);
				
				//executar a frase sql
				$stm -> execute();
			
				//fechar a conexão
				$this -> db = null;

			//retornar o resultado da execução da frase sql
			return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Problema ao buscar consoles";
			}
		}
		
	}
?>