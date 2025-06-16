<?php

	class Matricula
	{
		public function __construct(private string 	$dataMatricula	= '',
									private			$curso			= null,
									private			$aluno			= null){}
	
		// gets
		public function getDataMatricula()	{return $this -> dataMatricula;}
		public function getCurso()			{return $this -> curso;}
		public function getAluno()			{return $this -> aluno;}

		// sets
		public function setDataMatricula($dataMatricula)	{$this -> dataMatricula = $dataMatricula;}
		public function setCurso($curso)					{$this -> curso 		= $curso;}
		public function setAluno($aluno)					{$this -> aluno 		= $aluno;}
	}
?>