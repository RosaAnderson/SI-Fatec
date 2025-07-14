<?php
	class gameDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($game)
		{
			$sql = "INSERT INTO game (nome, idConsole) VALUES(?,?)";
			try
			{
				//preparar frase
				$stm = $this -> db -> prepare($sql);

				//substituir o ponto de interrogação
				$stm -> bindValue(1, $game -> getNome());
				$stm -> bindValue(2, $game -> getConsole() -> getIdConsole());
				
				//executar a frase sql
				$stm -> execute();

				//fechar a conexão
				$this -> db = null;

				return "Game cadastrado com sucesso!";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				return "Não foi possível inserir o game";
			}
		}
		
		public function buscar_games()
		{
			$sql = "SELECT
						g.nome AS nome_game,
			            l.nome AS nome_loja,
						c.descritivo AS nome_console
					FROM
						game_loja gl,
						game g,
						loja l,
						console c
					WHERE
						g.idGame = gl.idGame
					AND
						l.idLoja = gl.idLoja
					AND
						c.idConsole = g.idConsole";

			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> execute();
				$this -> db = null;
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOEXception $e)
			{
				$this -> db = null;
				return "Problema ao buscar dados da praia";
			}
		}

	}
?>