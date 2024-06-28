<?php
	final class Corrente extends Conta
	{
		public function __construct(private float $limite = 0.00, $agencia, $numero, $saldo)
		{
			parent:: __construct($agencia, $numero, $saldo);
		}
		
		public function getLimite()
		{
			return $this->limite;
		}
		
		public function setLimite($valor)
		{
			$this->limite = $valor;
		}
		public function retirada($valor)
		{
			if($this->saldo + $this->limite >= $valor)
			{
				parent:: retirada($valor);
			}
			else
			{
				echo "Saldo insuficiente";
			}
		}
	}//fim da classe
?>