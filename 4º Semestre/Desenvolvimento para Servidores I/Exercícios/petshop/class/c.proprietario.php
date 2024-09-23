<?php

	final class Proprietario extends Pessoa
	{
		public function __construct(private string	$CPF 		= "",
													$Nome,
													$Telefone,
									private array	$cachorro	= array())
		{
			parent:: __construct($Nome, $Telefone);
		}

		public function getCPF()		{return $this -> CPF;}
		public function getCachorro()	{return $this -> Cachorro;}
		
		public function setCPF($CPF)			{$this -> CPF 			= $CPF;}
		public function setCachorro($Cachorro)	{$this -> Cachorro[] 	= $Telefone;}
	}

?>