<?php

	// 
	class Filme
	{
		// contrutor
		public function __construct(private string	$titulo	= '',
								    private string	$ano	= '',
									private array	$ator	= array()){}
	
		// gets
		public function getTitulo()	{return $this -> titulo;}
		public function getAno() 	{return $this -> ano;	}
		public function getAtor()	{return $this -> ator;	}

		// sets
		public function setTitulo($titulo)	{$this -> titulo	= $titulo;	}
		public function setAno($ano) 		{$this -> ano		= $ano;		}
		public function setAtor($ator)		{$this -> ator[]	= $ator;	}		
	}
?>