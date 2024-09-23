<?php

	// 
	class fornecedor
	{
		// contrutor
		public function __construct(private string	$cnpj			= '',
								    private string	$razao_social	= ''){}
	
		// gets
		public function getCNPJ()			{return $this -> cnpj;			}
		public function getRazao_Social() 	{return $this -> razao_social;	}

		// sets
		public function setCNPJ($cnpj)					{$this -> cnpj			= $cnpj;		}
		public function setRazao_Rocial($razao_social) 	{$this -> razao_social	= $razao_social;}
		
		// metodo
		public function entrada($preco)
		{
			//
		}

		public function retirada($preco)
		{			
			//
		}	
	}
?>
