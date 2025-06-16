<?php

	// 
	abstract class Pessoa
	{
		// contrutor
		public function __construct(protected string	$Nome		= '',
								    protected string	$Telefone	= ''){}
									
		// gets
		public function getNome()		{return $this -> Nome;}
		public function getTelefone()	{return $this -> Telefone;}

		// sets
		public function setNome($Nome)			{$this -> Nome			= $Nome;}
		public function setTelefone($Telefone)	{$this -> Telefone 		= $Telefone;}
	}

?>