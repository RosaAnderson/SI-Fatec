<?php	
	abstract class Conta
	{
		public function __construct(protected string $agencia = "", protected string $numero = "", protected float $saldo = 0.00){}
		//métodos gets e sets
		
		public function getAgencia()
		{
			return $this->agencia;
		}
		public function getNumero()
		{
			return $this->numero;
		}
		public function getSaldo()
		{
			return $this->saldo;
		}
		
		public function setAgencia($agencia)
		{
			$this->agencia = $agencia;
		}
		
		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
		
		public function setSaldo($saldo)
		{
			$this->saldo = $saldo;
		}
		
		public function retirada($valor)
		{
			//$this->saldo = $this->saldo - $valor;
			$this->saldo -= $valor;
		}
		
		public function deposito($valor)
		{
			//$this->saldo = $this->saldo + $valor;
			$this->saldo += $valor;
		}
	}
?>