<?php
	class Plantacao
	{
		public function __construct(private int 	$idplantacao 	= 0,
									private string 	$descritivo		= ""){}
		
		public function getIdPlantacao()	{return $this -> idplantacao;}
		public function getDescritivo()		{return $this -> descritivo;}
	}

/* campos da tabela
	idplantacao
	descritivo	
*/
?>