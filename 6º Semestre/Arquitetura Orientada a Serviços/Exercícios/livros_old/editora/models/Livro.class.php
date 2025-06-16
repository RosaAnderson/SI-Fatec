<?php
	class Livro
	{
		public function __construct(private int $idlivro = 0, private string $titulo = "", private string $sinopse = "", private float $preco = 0.00, private $genero = null, private $autor =null){}
		
		public function getIdlivro()
		{
			return $this->idlivro;
		}
		public function getTitulo()
		{
			return $this->titulo;
		}
		public function getSinopse()
		{
			return $this->sinopse;
		}
		public function getPreco()
		{
			return $this->preco;
		}
		public function getGenero()
		{
			return $this->genero;
		}
		public function getAutor()
		{
			return $this->autor;
		}
	}
?>