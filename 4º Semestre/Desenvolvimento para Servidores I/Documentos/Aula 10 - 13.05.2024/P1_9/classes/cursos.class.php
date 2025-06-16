<?php
	class Cursos 
	{
		function __construct(private int $idCurso = 0, private string $nome ="", private float $preco = 0.00){}
		
		function getIdCurso()
		{
			return $this->idCurso;
		}
		function getNome()
		{
			return $this->nome;
		}
		function getPreco()
		{
			return $this->preco;
		}
		
		function setIdCurso($idcurso)
		{
			$this->idCurso = $idCurso;
		}
		function setNome($nome)
		{
			$this->nome = $nome;
		}
		function setPreco($preco)
		{
			$this->preco = $preco;
		}
		
	}