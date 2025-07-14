<?php
	class Doador
	{
		public function __construct(private int 	$iddoador 	= 0,
									private string 	$nome 		= "",
									private string 	$email 		= "",
									private string 	$celular 	= ""){}
		
		public function getIdDoador()	{return $this -> iddoador;}
		public function getNome()		{return $this -> nome;}
		public function getEmail()		{return $this -> email;}
		public function getCelular()	{return $this -> celular;}
	}
/*
iddoador
nome
email
celular
*/	
?>