<?php
	class Ator
	{
		public function __construct(private string $nome = "", private string $nacionalidade = ""){}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getNacionalidade()
		{
			return $this->nacionalidade;
		}
	}//fim da classe
?>