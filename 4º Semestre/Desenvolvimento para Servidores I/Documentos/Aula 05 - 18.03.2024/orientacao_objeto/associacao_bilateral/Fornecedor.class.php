<?php
	class Fornecedor
	{
		public function __construct(private string $cnpj = "", private string $razao_social = "", private array $produto = array()){}
		
		//métodos gets
		
		public function getCnpj()
		{
			return $this->cnpj;
		}
		public function getRazao_social()
		{
			return $this->razao_social;
		}

		public function getProduto()
		{
			return $this->produto;
		}
		//métodos sets
		
		public function setCnpj($cnpj)
		{
			$this->cnpj = $cnpj;
		}
		
		public function setRazao_social($razao_social)
		{
			$this->razao_social = $razao_social;
		}
	
		public function setProduto($produto)
		{
			$this->produto[] = $produto;
		}
		
	}//fim da classe
?>