<?php

	// 
	class Ator
	{
		// contrutor
		public function __construct(private string	$nome			= '',
								    private string	$nacionalidade	= '',
									private array	$filme			= array()){}
	
		// gets
		public function getNome()			{return $this -> nome;			}
		public function getNacionalidade() 	{return $this -> nacionalidade;	}
		public function getFilme()			{return $this -> filme;			}

		// sets
		public function setNome($nome)						{$this -> nome			= $nome;			}
		public function setNacionalidade($nacionalidade) 	{$this -> nacionalidade	= $nacionalidade;	}
		public function setFilme($filme)					{$this -> filme[]		= $filme;			}		
	}
?>