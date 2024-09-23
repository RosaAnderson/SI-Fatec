<?php

	// 
	class Papel
	{
		// contrutor
		public function __construct(private string	$descritivo	= '',
								    private 		$ator		= null,
									private 		$filme		= null){}
	
		// gets
		public function getDescritivo()	{return $this -> descritivo;}
		public function getAtor() 		{return $this -> ator;		}
		public function getFilme()		{return $this -> filme;		}

		// sets
		public function setDescritivo($descritivo)	{$this -> descritivo	= $descritivo;	}
		public function setAtor($ator) 				{$this -> ator			= $ator;		}
		public function setFilme($filme)			{$this -> filme			= $filme;		}		
	}
?>