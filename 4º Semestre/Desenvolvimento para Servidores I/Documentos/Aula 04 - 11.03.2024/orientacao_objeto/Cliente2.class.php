<?php
	//PHP 8
	class Cliente2
	{
		//método construtor
		
		public function __construct(private string $nome = "", private string $cpf = "", private string $endereco = "", private string $celular = ""){}
		
		//métodos gets e sets
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getCpf()
		{
			return $this->cpf;
		}
		
		public function getEndereco()
		{
			return $this->endereco;
		}
		
		public function getCelular()
		{
			return $this->celular;
		}
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
		public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}
		
		public function setCelular($celular)
		{
			$this->celular = $celular;
		}
		
		
		
		
		
		
		
		
		
		//métodos
		public function inserir()
		{
			return $this->nome;
		}
		
		public function alterar($nome)
		{
			$this->nome = $nome;
		}
	}//fim da classe
	
?>