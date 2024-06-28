<?php
	class Atendimento
	{
		public function __construct(private string $data="", private $cachorro = null, private array $servico = array()){}
		
		public function getData()
		{
			return $this->data;
		}
		
		public function getCachorro()
		{
			return $this->cachorro;
		}
		
		public function getServico()
		{
			return $this->servico;
		}
		
		public function setData($data)
		{
			$this->data = $data;
		}
		
		public function setCachorro($cachorro)
		{
			$this->cachorro = $cachorro;
		}
		
		public function setServico($servico)
		{
			$this->servico[] = $servico;
		}
		
	}//fim da classe
?>