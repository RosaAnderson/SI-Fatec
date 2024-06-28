<?php
	class Produto
	{
		public function __construct(private string $nome = "", private string $descricao = "", private float $preco = 0.00, private array $fornecedor = array()){}
		
		//métodos gets
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getDescricao()
		{
			return $this->descricao;
		}
		public function getPreco()
		{
			return $this->preco;
		}
		
		public function getFornecedor()
		{
			return $this->fornecedor;
		}
		
		//métodos sets
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		
		public function setPreco($preco)
		{
			$this->preco = $preco;
		}
		
		public function setFornecedor($fornecedor)
		{
			$this->fornecedor[] = $fornecedor;
		}
	}//fim da classe
?>