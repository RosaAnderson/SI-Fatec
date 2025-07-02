<?php
	class livroDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function todos_livros()
		{
			$sql = "SELECT * FROM livros";
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
				return "Tente mais tarde";
			}
		}
		public function buscar_livros_genero($livro)
		{
			$sql = "SELECT livros.* FROM livros, generos WHERE livros.id_generos = generos.id_generos AND generos.descritivo = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				
				$stm->bindValue(1, $livro->getGenero()->getDescritivo());
				
				$stm->execute();
				
				$this->db = null;
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar livros por gênero";
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