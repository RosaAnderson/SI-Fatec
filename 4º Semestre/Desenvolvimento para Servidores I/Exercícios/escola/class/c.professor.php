<?php
	final class Professor extends Pessoa
	{
		public function __construct(private string	$Titulo		= "",
													$Nome,
													$CPF,
											array	$Modalidade	= array())
		{
			parent:: __construct($Nome, $CPF);
		}
	
		// gets
		public function getTitulo()		{return $this -> Titulo;}
		public function getModalidade()	{return $this -> Modalidade;}

		// sets
		public function setTitulo($Titulo)			{$this -> Titulo		= $Titulo;}
		public function setModalidade($Modalidade)	{$this -> Modalidade[]	= $Modalidade;}
	}
?>