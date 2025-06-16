<?php
	class funcionario
	{
		public function __construct(private string $nome= "", private string $cpf = "", private string $cargo = "", private array $subordinados = array(), private $chefe = null){}
		
		public function getSubordinados()
		{
			return $this->subordinados;
		}
		public function getChefe()
		{
			return $this->chefe;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		public function getCargo()
		{
			return $this->cargo;
		}
	}//fim da classe
?>