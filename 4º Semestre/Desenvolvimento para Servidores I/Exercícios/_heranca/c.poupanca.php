<?php
	
#	$timezoneId = "America/Sao_Paulo";

#	date_default_timezone_set(string $timezoneId): bool;
	date_default_timezone_set("America/Sao_Paulo");

	final class Poupanca extends conta
	{
		public function __construct(private int $cAniversario = 0, $pAgencia, $pNumero, $pSaldo)
		{
			parent:: __construct($pAgencia, $pNumero, $pSaldo);
		}
	
		public function getAniversario() {return $this -> cAniversario;}
	
		public function setAniversario($sAniversario) {$this -> cAniversario = $sAniversario;}
		
		public function retirada($Valor)
		{
			$data = date('d/m/Y'); # data completa

			$data = date('d'); # somente o dia
			
			echo $data;
			
			echo "<br>";
			
			if($data < $this -> cAniversario)
			{
				echo "Os juros não foram creditados";
			}
			else if($this -> pSaldo >= $Valor)
			{
				parent:: retirada($Valor);
			}
			else
			{
				echo "Saldo insuficiente";
			}
			
			
		}
	}
?>