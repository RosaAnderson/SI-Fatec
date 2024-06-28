<?php
	class Aluno extends Pessoa
	{
		public function __construct(private string $data_nascimento = "", $nome, $cpf, private array $matricula = array())
		{
			parent:: __construct($nome, $cpf);
		}
		
		public function getData_nascimento()
		{
			return $this->data_nascimento;
		}
		
		public function getMatricula()
		{
			return $this->matricula;
		}
		
	}
?>