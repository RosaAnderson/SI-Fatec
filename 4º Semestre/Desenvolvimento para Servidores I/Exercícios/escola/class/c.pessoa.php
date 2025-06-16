<?php
	// 
	abstract class Pessoa
	{
		// contrutor
		public function __construct(protected string	$Nome	= '',
									protected string	$CPF	= ''){}
	
		// gets
		public function getNome()	{return $this -> Nome;}
		public function getCPF()	{return $this -> CPF;}

		// sets
		public function setNome($Nome)	{$this -> Nome	= $Nome;}
		public function setCPF($CPF)	{$this -> CPF	= $CPF;}
		
		// metodo
	}
?>