<?php
	class Servico
	{
		public function __construct(private string	$Descritivo	= "",
									private float	$Preco		= 0.00){}

		public function getDescritivo()				{return $this -> Descritivo;}
		public function getPreco()					{return $this -> Preco;}

		public function setDescritivo($Descritivo)	{$this -> Descritivo	= $Descritivo;}		
		public function setPreco($Praco)			{$this -> Preco			= $Preco;}		
	}

?>