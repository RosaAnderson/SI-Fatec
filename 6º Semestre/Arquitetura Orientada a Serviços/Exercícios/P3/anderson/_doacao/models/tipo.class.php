<?php
	class Tipo
	{
		public function __construct(private int 	$idtipo = 0,
									private string 	$descritivo = ""){}
		
		public function getIdTipo()		{return $this -> idtipo;}
		public function getDescritivo()	{return $this -> descritivo;}
	}
?>