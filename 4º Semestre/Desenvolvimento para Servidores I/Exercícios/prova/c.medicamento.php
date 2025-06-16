<?php

	// 
	class Medicamento
	{
		// contrutor
		public function __construct(private string	$nome		= '',
								    private string	$tarja		= '',
									private string	$bula		= '',
								    private array	$consulta	= array()){}
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getTarja()		{return $this -> tarja;		}
		public function getBula()		{return $this -> bula;		}
		public function getConsulta()	{return $this -> consulta;	}

		// sets
		public function setNome	($nome)			{$this -> nome		 = $nome;		}
		public function setTarja($tarja)		{$this -> tarja	     = $tarja;		}
		public function setBula	($bula)			{$this -> bula		 = $bula;		}
		public function setConsulta($consulta)	{$this -> consulta[] = $consulta;	}		
	}
?>