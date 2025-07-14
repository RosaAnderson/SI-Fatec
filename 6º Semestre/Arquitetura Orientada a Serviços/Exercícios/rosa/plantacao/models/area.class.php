<?php
	class Area
	{
		public function __construct(private int		$idarea		= 0,
									private float	$medida		= 0,
									private string 	$unidade	= '',
									private string 	$latitude	= '',
									private	string	$longitude	= ''){}
		
		public function getIdArea()		{return $this -> idarea;}
		public function getMedida()		{return $this -> medida;}
		public function getUnidade()	{return $this -> unidade;}
		public function getLatitude()	{return $this -> latitude;}
		public function getLongitude()	{return $this -> longitude;}
	}

/* campos da tabela
	idarea,
	medida,
	unidade,
	latitude,
	longitude
*/
?>

