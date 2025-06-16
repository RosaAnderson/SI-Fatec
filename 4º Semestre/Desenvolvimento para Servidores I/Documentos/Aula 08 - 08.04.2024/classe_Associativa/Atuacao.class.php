<?php
	class Atuacao
	{
		public function __construct(private string $papel = "", private  $filme = null, private $ator = null){}
		
		public function getPapel()
		{
			return $this->papel;
		}
		
		public function getFilme()
		{
			return $this->filme;
		}
		
		public function getAtor()
		{
			return $this->ator;
		}
	}//fim da classe
?>