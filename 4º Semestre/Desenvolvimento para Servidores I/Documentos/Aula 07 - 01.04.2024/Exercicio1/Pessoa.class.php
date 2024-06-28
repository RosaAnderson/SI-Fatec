<?php
	abstract class Pessoa
	{
		public function __construct(protected string $nome = "", protected string $telefone = ""){}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getTelefone()
		{
			return $this->telefone;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
	}
?>