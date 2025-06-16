<?php
	class categoriaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($categoria)
		{
			$sql = "INSERT INTO categorias (descritivo, status) VALUES(?,?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $categoria->getDescritivo());
			$stm->bindValue(2, $categoria->getStatus());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		public function alterar($categoria)
		{
			$sql = "UPDATE categorias SET descritivo = ? WHERE idcategoria = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getDescritivo());
			$stm->bindValue(2, $categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
		}
		
		public function excluir($categoria)
		{
			$sql = "DELETE FROM categorias WHERE idcategoria = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
		}
		 
		public function buscar_todas()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM categorias";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			//retornar o resultado da execução da frase sql
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function buscar_uma_categoria($categoria)
		{
			$sql = "SELECT * FROM categorias WHERE idcategoria = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function alterar_status_categoria($categoria)
		{
			$sql = "UPDATE categorias SET status = ? WHERE idcategoria = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $categoria->getStatus());
			$stm->bindValue(2, $categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
		}
		public function buscar_categorias_ativas($categoria)
		{
			$sql = "SELECT * FROM categorias WHERE status = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$categoria->getStatus());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
	}//fim da classe categoriaDAO
?>