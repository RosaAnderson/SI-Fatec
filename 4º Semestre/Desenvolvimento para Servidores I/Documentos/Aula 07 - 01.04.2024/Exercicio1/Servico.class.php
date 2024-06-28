<?php
	class Servico
	{
		public function __construct(private string $descritivo="", private float $preco = 0.00){}
		
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		public function getPreco()
		{
			return $this->preco;
		}
				
		public function setDescritivo($descritivo)
		{
			$this->descritivo = $descritivo;
		}
		public function setPreco($preco)
		{
			$this->preco = $preco;
		}
		
		
		
	}//fim da classe
?>