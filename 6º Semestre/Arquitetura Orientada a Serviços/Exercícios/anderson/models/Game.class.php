<?php
	class Game
	{
		public function __construct(private int $idGame = 0,
									private string $nome = "",
									private $console = null){}
		
	
		public function getIdGame()
		{
			return $this -> idGame;
		}
		
		public function getNome()
		{
			return $this -> nome;
		}
		
		public function getConsole()
		{
			return $this -> console;
		}
	}
?>