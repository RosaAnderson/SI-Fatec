<?php
	final class Corrente extends conta
	{
		public function __construct(private float $cLimite = 0.00,
		                                          $pAgencia,
												  $pNumero,
												  $pSaldo)
		{
			parent:: __construct($pAgencia, $pNumero, $pSaldo);
		}
	
		public function getLimite() {return $this -> cLimite;}
	
		public function setLimite($sLimite) {$this -> cLimite = $sLiminte;}
		
		public function retirada($Valor)
		{
			if($this -> cSaldo + $this -> cLimite >= $Valor)
			{
				parent:: retirada($Valor);
			}
			else
			{
				echo "Saldo Insuficiente";
			}
		}
	}
?>