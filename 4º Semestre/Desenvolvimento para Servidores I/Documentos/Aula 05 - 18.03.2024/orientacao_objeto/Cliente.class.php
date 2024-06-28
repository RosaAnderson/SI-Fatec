<?php
	//PHP 7
	class Cliente
	{
		//atributos
		public $nome;
		public $cpf;
		public $endereco;
		public $celular;
		
		//métodos
		//método construtor
		
		public function __construct($nome = "", $cpf = "", $endereco = "", $cel = "")
		{
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->celular = $cel;
		}
		public function inserir()
		{
			return $this->nome;
		}
		
		public function alterar($nome)
		{
			$this->nome = $nome;
		}
	}//fim da classe
	
	//criando um objeto 
	
	$obj1 = new Cliente("", "111.111.111-11","", "(14)999999");
	
	/*$obj1->nome = "Maria da Silva";
	$obj1->cpf = "111.111.111-11";
	$obj1->endereco = "Rua XV de Novembro - 200, Centro - Jaú";
	$obj1->celular = "(14)9999999";*/
	
	//echo $obj1->inserir();
	//$obj1->alterar("Maria Helena da Silva");
	echo $obj1->inserir();
	echo "<pre>";
	var_dump($obj1);
	echo "</pre>";
	
?>