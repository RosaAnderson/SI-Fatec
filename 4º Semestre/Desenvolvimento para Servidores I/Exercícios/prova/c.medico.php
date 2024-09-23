<?php

	final class Medico extends Pessoa
	{
		public function __construct(private string 	$especialidade = '',
													$nome,
													$cpf,
													$ddd,
													$numero)
		{
			parent:: __construct($nome, $cpf, $ddd, $numero);
		}
	
		// gets
		public function getEspecialidade()	{return $this -> especialidade;}

		// sets
		public function setEspecialidade($especialidade)	{$this -> especialidade	= $especialidade;}
	}
?>