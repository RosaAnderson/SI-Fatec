<?php
	final class Aluno extends Pessoa
	{
		public function __construct(private string	$DataNascimento = "",
													$Nome,
													$CPF,
											array	$Matricula			= array())
		{
			parent:: __construct($Nome, $CPF);
		}

		// gets
		public function getDataNascimento()	{return $this -> DataNascimento;}
		public function getMatricula()		{return $this -> Matricula;}

		// sets
		public function setDataNascimento($DataNascimento)	{$this -> DataNascimento	= $DataNascimento;}
		public function setMatricula($Matricula) 			{$this -> Matricula[]		= $Matricula;}
	}
?>