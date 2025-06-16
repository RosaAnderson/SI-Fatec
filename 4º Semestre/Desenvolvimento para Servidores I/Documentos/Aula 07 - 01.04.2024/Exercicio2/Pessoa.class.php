<?php
	abstract class Pessoa
	{
		public function __construct(protected string $nome = "", protected string $cpf = ""){}
		
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		
	}
?>