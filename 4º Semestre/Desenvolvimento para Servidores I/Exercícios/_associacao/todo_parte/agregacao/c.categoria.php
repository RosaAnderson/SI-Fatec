<?php

	// 
	class categoria
	{
		// contrutor
		public function __construct(private string	$descritivo	= ''){}
	
		// gets
		public function getDescritivo() {return $this -> descritivo;}

		// sets
		public function setDescritivo($descricao) 	{$this -> descritivo = $descritivo;	}
	}
?>