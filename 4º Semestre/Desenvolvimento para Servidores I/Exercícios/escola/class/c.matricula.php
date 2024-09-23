<?php
	// 
	class Matricula
	{
		// contrutor
		public function __construct(private	string	$DataMatricula	= '',
													$Aluno			= null,
													$Modalidade		= null){}
	
		// gets
		public function getDataMatricula()	{return $this -> DataMatricula;}
		public function getAluno()			{return $this -> Aluno;}
		public function getModalidade()		{return $this -> Modalidade;}

		// sets
		public function setDataMatricula($DataMatricula)	{$this -> DataMatricula	= $DataMatricula;}
		public function setAluno($Aluno)					{$this -> Aluno			= $Aluno;}
		public function setModalidade($Modalidade)			{$this -> Modalidade	= $Modalidade;}
		
		// metodo
	}
?>