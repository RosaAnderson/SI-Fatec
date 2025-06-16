<?php
	class UsuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function vUser($usuario)
		{
			$sql = "SELECT  idusuario,
							nome,
							tipo
					FROM usuarios
					WHERE email = ? and senha = ?";
			
			//preparar frase
			$stm = $this -> db -> prepare($sql);
			
			//substituir o ponto de interrogação
			$stm -> bindValue(1, $usuario -> getEmail());
			$stm -> bindValue(2, $usuario -> getSenha());
			
			//executar a frase sql
			$stm -> execute();
			
			//fechar a conexão
			$this -> db = null;
			
			return $stm -> fetchAll(PDO::FETCH_OBJ);
		}

		public function insert($usuario)
		{
			$sql = "INSERT INTO usuarios
						(nome, email, senha, tipo)
					VALUES
						(?, ?, ?, ?)";
			
			//preparar frase
			$stm = $this -> db -> prepare($sql);
			
			//substituir o ponto de interrogação
			$stm -> bindValue(1, $nome	-> getNome());
			$stm -> bindValue(2, $email -> getEmail());
			$stm -> bindValue(3, $senha -> getSenha());
			$stm -> bindValue(4, $tipo	-> getTipo());
			
			//executar a frase sql
			$stm -> execute();
			
			//fechar a conexão
			$this -> db = null;
		}
		
		public function alterar()
		{
		}
		
		public function excluir($loj_nome)
		{
		/*
			$sql = "DELETE FROM categorias WHERE idcategoria = ?";
			
			//preparar frase
			$stm = $this->db->prepare($sql);
			
			//substituir o ponto de interrogação
			$stm->bindValue(1, $categoria->getIdcategoria());
			
			//executar a frase sql
			$stm->execute();
			
			//fechar a conexão
			$this->db = null;
		/**/	
		}
		 
		public function listAll()
		{
		/**/
			//frase sql que será executada
			$sql = "SELECT * FROM usuarios";
			
			//preparar frase
			$stm = $this -> db -> prepare($sql);
			
			//executar a frase sql
			$stm -> execute();
			
			//fechar a conexão
			$this -> db = null;
			
			//retornar o resultado da execução da frase sql
			return $stm -> fetchAll(PDO::FETCH_OBJ);
		/**/
		}
	}
?>