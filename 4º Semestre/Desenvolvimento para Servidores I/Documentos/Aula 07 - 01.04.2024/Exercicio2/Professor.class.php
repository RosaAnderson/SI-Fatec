<?php
	class Professor extends Pessoa
	{
		public function __construct(private string $titulo = "", $nome, $cpf, private array $modalidade = array())
		{
			parent:: __construct($nome, $cpf);
		}
		
		
		public function getTitulo()
		{
			return $this->titulo;
		}
		
		public function getModalidade()
		{
			return $this->modalidade;
		}
		
	}
?>