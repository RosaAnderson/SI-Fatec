<?php

	class Cursos
	{
		public function __construct(private int 	$idCurso	= 0,
									private string	$nome		= '',
									private float	$preco		= 0.00,
                                    private	array	$aluno		= array(),
									private array	$professor	= array()){}
	
		// gets
		public function getIdCurso()	{return $this -> idCurso;}
		public function getNome()		{return $this -> nome;}
		public function getPreco()		{return $this -> preco;}
		public function getAluno()		{return $this -> aluno;}
		public function getProfessor()	{return $this -> professor;}

		// sets
		public function setIdCurso($idCurso)		{$this -> idCurso 		= $idCurso;}
		public function setnome($nomne)				{$this -> nome 			= $nome;}
		public function setPreco($preco)			{$this -> preco			= $preco;}
		public function setAluno($aluno)			{$this -> aluno[]		= $aluno;}
		public function setProfessor($professor)	{$this -> professor[]	= $professor;}
	}
?>