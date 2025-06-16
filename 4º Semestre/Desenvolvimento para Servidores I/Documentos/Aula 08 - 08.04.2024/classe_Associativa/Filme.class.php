<?php
	class Filme
	{
		public function __construct(private string $titulo = "", private int $ano = 0){}
		
		public function getTitulo()
		{
			return $this->titulo;
		}
		
		public function getAno()
		{
			return $this->ano;
		}
	}//fim da classe
?>