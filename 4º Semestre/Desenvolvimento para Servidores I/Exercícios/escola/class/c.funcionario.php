<?php
	final class Funcionario extends Pessoa
	{
		public function __construct(private string	$Cargo = "",
													$Nome,
													$CPF)
		{
			parent:: __construct($Nome, $CPF);
		}
	
		// gets
		public function getCargo()	{return $this -> Cargo;}
	
		// sets
		public function setCargo($Cargo) {$this -> Cargo = $Cargo;}
	}
?>