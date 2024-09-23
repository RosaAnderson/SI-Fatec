<?php

	// 
	class Exame
	{
		// contrutor
		public function __construct(private string	$nome		= '',
								    private string	$preparo	= ''){}
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getPreparo()	{return $this -> preparo;	}

		// sets
		public function setNome($nome)			{$this -> nome		= $nome;	}
		public function setPreparo($preparo)	{$this -> preparo 	= $preparo;	}
	}
?>