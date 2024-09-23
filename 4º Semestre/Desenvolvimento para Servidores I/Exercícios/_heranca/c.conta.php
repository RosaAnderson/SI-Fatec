<?php

	// 
	abstract class Conta
	{
		// contrutor
		public function __construct(protected string $cAgencia = '',
								    protected string $cNumero  = '',
								    protected float  $cSaldo   = 0.00){}
	
		// gets
		public function getAgencia()	{return $this -> cAgencia;	}
		public function getNumero() 	{return $this -> cNumero;	}
		public function getSaldo()  	{return $this -> cSaldo;	}

		// sets
		public function setAgencia($sAgencia)	{$this -> cAgencia	= $sAgencia;}
		public function setNome($sNumero) 		{$this -> cNumero 	= $sNumero; }
		public function setCPF($sSaldo)  		{$this -> cSaldo	= $sSaldo;  }
		
		// metodo
		public function entrada($fValor)
		{
			$this -> cSaldo += $fValor;
		}

		public function retirada($fValor)
		{			
			$this -> cSaldo -= $fValor;
		}	
	}
?>