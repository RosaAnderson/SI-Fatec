<?php
	class Autor
	{
		public function __construct(private int $id_autor = 0, private string $nome = "", private string $nacionalidade = ""){}
		
		public function getId_autor()
		{
			return $this->id_autor;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getNacionalidade()
		{
			return $this->nacionalidade;
		}
	}
?>