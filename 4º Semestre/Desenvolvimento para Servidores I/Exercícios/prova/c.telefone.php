<?php

	// 
	class Telefone
	{
		// contrutor
		public function __construct(private string	$ddd	= '',
								    private string	$numero	= ''){}
	
		// gets
		public function getDDD()	{return $this -> ddd;	}
		public function getNumero()	{return $this -> numero;}

		// sets
		public function setDDD($ddd)		{$this -> ddd		= $ddd;		}
		public function setNumero($numero)	{$this -> numero	= $numero;	}
	}
?>