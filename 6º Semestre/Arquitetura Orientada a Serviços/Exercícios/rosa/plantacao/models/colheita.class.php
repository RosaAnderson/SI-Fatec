<?php
	class Colheita
	{
		public function __construct(private int		$idcolheita		= 0,
									private string	$data_colheita	= '',
									private float 	$quantidade		= 0,
									private string 	$unidade		= '',
									private			$plantacao		= null,
									private			$area 			= null){}
		
		public function getIdColheita()		{return $this -> idcolheita;}
		public function getDataColheita()	{return $this -> data_colheita;}
		public function getQuantidade()		{return $this -> quantidade;}
		public function getUnidade()		{return $this -> unidade;}
		public function getPlantacao()		{return $this -> plantacao;}
		public function getArea()			{return $this -> area;}
	}

/* campos da tabela
	idcolheira,
	data_colheita,
	quantidade,
	unidade,
	idplantacao,
	idarea
*/
?>
