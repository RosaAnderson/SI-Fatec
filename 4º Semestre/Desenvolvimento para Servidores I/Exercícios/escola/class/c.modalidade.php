<?php
	// 
	class Modalidade
	{
		// contrutor
		public function __construct(private	string	$Descritivo	= '',
											array	$Professor	= array()){}
	
		// gets
		public function getDescritivo()	{return $this -> Descritivo;}
		public function getProfessor()	{return $this -> Professor;}

		// sets
		public function setDescritivo($Descritivo)	{$this -> Descritivo	= $Descritivo;}
		public function setProfessor($Professor)	{$this -> Preofessor[]	= $Professor;}
		
		// metodo
	}
?>