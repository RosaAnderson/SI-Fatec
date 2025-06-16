<?php

	final class Paciente extends Pessoa
	{
		public function __construct(private string 	$convenio = '',
													$nome,
													$cpf,
													$ddd,
													$numero)
		{
			parent:: __construct($nome, $cpf, $ddd, $numero);
		}
	
		// gets
		public function getConvenio()	{return $this -> convenio;}

		// sets
		public function setConvenio($convenio)	{$this -> convenio	= $convenio;}
	}
?>