<?php
	class Categoria extends Conexao
	{
		public function __construct(private int $idcategoria = 0, private string $descritivo = "")
		{
			parent:: __construct();
		}
		
		public function getIdcategoria()
		{
			return $this->idcategoria;
		}
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		
		public function inserir()
		{
			$sql = "INSERT INTO categorias (descritivo) VALUES(?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $this->descritivo);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		
		public function alterar()
		{
		}
		
		public function excluir()
		{
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
	}
?>