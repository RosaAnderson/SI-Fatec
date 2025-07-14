<?php
	class doacaoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function inserir($doacao)
		{
			$sql = "INSERT INTO doacao
					(data_dacao, descricao, iddoador, idtipo)
			        VALUES(?, ?, ?, ?)";
			try
			{
				$stm = $this -> db -> prepare($sql);

				$stm -> bindValue(1, $doacao -> getDataDoacao());
				$stm -> bindValue(2, $doacao -> getDescricao());
				$stm -> bindValue(3, $doacao -> getDoador() -> getIdDoador());
				$stm -> bindValue(4, $doacao -> getTipo() -> getIdTipo());
				$stm -> execute();

				$this -> db = null;

				return "Docação inserida com sucesso";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Problema ao inserir doação";
			}
		}

		public function buscar($doacao)
		{
			$sql = "SELECT * FROM doacao
					WHERE idtipo = ?";
			try
			{
				$stm = $this -> db -> prepare($sql);

				$stm -> bindValue(1, $doacao -> getTipo() -> getIdTipo());
				$stm -> execute();

				$this -> db = null;

				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao encontrar doação";
			}
		}

	}
?>