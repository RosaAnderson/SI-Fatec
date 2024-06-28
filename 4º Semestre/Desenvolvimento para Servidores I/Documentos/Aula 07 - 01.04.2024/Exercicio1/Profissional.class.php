<?php
	class Profissional extends Pessoa
	{
		public function __construct(private string $crmv = "", private array $atendimento = array(), $nome, $telefone)
		{
			parent:: __construct($nome, $telefone);
		}
		
		
		public function getCrmv()
		{
			return $this->crmv;
		}
		
		public function getAtendimento()
		{
			return $this->atendimento;
		}		
		public function setCrmv($crmv)
		{
			$this->crmv = $crmv;
		}
		
		public function setAtendimento($atendimento)
		{
			$this->atendimento[] = $atendimento;
		}
		
		
		
	}//fim da classe
?>