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

		public function buscar_livros_autor($autorN)
		{
			$sql = "SELECT l.*
					  FROM livros l
					  JOIN livros_autores la ON l.id_livros = la.id_livros
					  JOIN autores a ON la.id_autores = a.id_autores
					 WHERE a.nome = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				
				$stm->bindValue(1, $autorN->getAutor()->getNomeAutores());
				
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
	}
?>