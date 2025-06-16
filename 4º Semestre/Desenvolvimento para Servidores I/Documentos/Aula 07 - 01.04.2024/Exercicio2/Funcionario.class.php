<?php
	class Funcionario extends Pessoa
	{
		public function __construct(private string $cargo = "", $nome, $cpf)
		{
			parent:: __construct($nome, $cpf);
		}
		
		
		public function getCargo()
		{
			return $this->cargo;
		}
		
	}
?>