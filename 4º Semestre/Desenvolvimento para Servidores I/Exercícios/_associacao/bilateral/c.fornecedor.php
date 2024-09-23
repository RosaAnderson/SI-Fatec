<?php

	// 
	class fornecedor
	{
		// contrutor
		public function __construct(private string	$cnpj			= '',
								    private string	$razao_social	= '',
									private array	$produto		= array()){}
	
		// gets
		public function getCNPJ()			{return $this -> cnpj;			}
		public function getRazao_Social() 	{return $this -> razao_social;	}
		public function getProduto()		{return $this -> produto;		}

		// sets
		public function setCNPJ($cnpj)					{$this -> cnpj			= $cnpj;		}
		public function setRazao_Rocial($razao_social) 	{$this -> razao_social	= $razao_social;}
		public function setPreco($produto)				{$this -> produto[]		= $produto;		}
		
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
