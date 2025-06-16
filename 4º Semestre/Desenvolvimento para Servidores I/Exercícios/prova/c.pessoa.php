<?php

	// 
	abstract class Pessoa
	{
		// contrutor
		public function __construct(protected string	$nome		= '',
								    protected string	$cpf		= '',
														$ddd		= '',
														$numero		= '' )
		{
			$this -> telefone[] = new Telefone(	$ddd,
												$numero);
		}												
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getCPF()		{return $this -> cpf;		}
		public function getTelefone()	{return $this -> telefone;	}

		// sets
		public function setNome($nome)	{$this -> nome		= $nome;}
		public function setCPF($cpf)	{$this -> cpf		= $cpf;	}

		public function setTelefone($ddd, $numero)
		{
			$this -> telefone[] = new Telefone(	$ddd,
												$numero);
		}
	}
?>