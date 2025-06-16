<?php
	date_default_timezone_set("America/Sao_Paulo");
	final class Poupanca extends Conta
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
		public function retirada($valor)
		{
			$data = date("d/m/Y");
			$data = explode("/", $data);
			
			if($data[0] < $this->aniversario)
			{
				echo "Os juros não foram creditados";
			}
			else if($this->saldo >= $valor)
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