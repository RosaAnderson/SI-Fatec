<?php
    class GameController
    {
        public function buscar_games()
        {
            $gameDAO = new gameDAO();
            $game = $gameDAO -> buscar_games();
			require_once "views/gamepdf.php";
        }

		public function inserir()
        {
		   $msg = array("","","");
			if($_POST)
			{
				$erro = false;
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o nome do game";
					$erro = true;
				}
				
				if($_POST["console"] == "0")
				{
					$msg[2] = "Escolha um console";
					$erro = true;
				}
				
				
				if(!$erro)
				{
					// inserir no BD
					$console = new Console($_POST["console"]);
					
					$game = new Game(0, $_POST["nome"], $console);
					
					$gameDAO = new gameDAO();
					
					$gameDAO -> inserir($game);
					
					header("location:/anderson/");
					die();
				}
			}

			// buscar no BD
			$consoleDAO = new consoleDAO();
					
			$ret = $consoleDAO -> buscar_console();
			require_once "views/form_game.php"; 
        }
    }
?>