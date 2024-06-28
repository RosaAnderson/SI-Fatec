<?php
	class Poupanca extends Conta
	{
		public function __construct(private int $aniversario = 0, $agencia, $numero, $saldo)
		{
			parent:: __construct($agencia, $numero, $saldo);
		}
		
		public function getAniversario()
		{
			return $this->aniversario;
		}
		
		public function setAniversario($dia)
		{
			$this->aniversario = $dia;
		}
	}
?>