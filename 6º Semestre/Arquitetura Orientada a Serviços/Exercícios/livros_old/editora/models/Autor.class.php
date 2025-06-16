<?php
	class Autor
	{
		public function __construct(private int $idautor = 0, private string $nomeAutor = ""){}
		
		public function getIdautor()
		{
			return $this->idautor;
		}
		public function getNomeAutores()
		{
			return $this->nomeAutor;
		}
	}
?>