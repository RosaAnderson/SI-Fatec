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
				$stm = $this -> db -> prepare($sql);
				$stm -> execute();
				
                $this -> db = null;

				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao buscar as praias";
			}
		}

		public function buscar_por_ranking($praia)
		{
			$sql = "SELECT * FROM praia WHERE ranaking = ?";
			try
			{
				$stm = $this -> db -> prepare($sql);
				
				$stm -> bindValue(1, $praia -> getRanking());
				
				$stm -> execute();
				
				$this -> db = null;
				
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Erro ao buscar praias por ranking";
			}
		}


		public function livros_Autor($livro)
		{
			$sql = "SELECT l.* FROM livros as l, autores as a, livros_autores as la WHERE la.id_livros = l.id_livros AND la.id_autores = a.id_autores AND a.nome = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $livro->getAutores()[0]->getNome());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar os livros de um determinado autor";
			}
		}
	}//fim da classe
?>