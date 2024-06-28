<?php
	class Fornecedor
	{
		public function __construct(private string $cnpj = "", private string $razao_social = ""){}
		
		//métodos gets
		
		public function getCnpj()
		{
			return $this->cnpj;
		}
		public function getRazao_social()
		{
			return $this->razao_social;
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
	
		
		
	}//fim da classe
?>