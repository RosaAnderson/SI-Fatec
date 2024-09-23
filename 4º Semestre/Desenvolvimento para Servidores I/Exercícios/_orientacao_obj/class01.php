<?php

	// PHP 7
	class Cliente
	{
		// atributos
		public $nome;
		public $cpf;
		public $endereco;
		public $celular;
		
		// metodo construtor
        public function __construct($nome = '', $cpf = '', $endereco = '', $celular = '')
		{
            $this -> nome     = $nome;
            $this -> CPF      = $cpf;
            $this -> endereco = $endereco;
            $this -> celular  = $celular;
        }

		// metodo
		public function inserir()
		{
			//echo "inserir";
			
			return $this -> nome;
		}

		public function editar($nome)
		{
			//echo "editar";
			
			$this -> nome = $nome;
		}
	}
	
	// objeto
	/*
	$obj01 = new Cliente;
		
	$obj01 -> nome     = 'Anderson Rosa';
	$obj01 -> cpf      = '010.101.000-01';
	$obj01 -> endereco = 'Rua João Alberto Scenna, 21';
	$obj01 -> celular  = '19 99906 5400';
	*/
	
	$obj01 = new Cliente('Anderson Rosa', '010.101.000-01', 'Rua João Alberto Scenna, 21', '19 99906 5400');
	
	
	echo $obj01 -> inserir();
	
	$obj01 -> editar("Jonas");
	
	//$obj01 -> inserir();
	
	echo $obj01 -> inserir();
	
	// exibe o conteudo do objeto
	echo "<pre>";
		var_dump($obj01);
	echo "</pre>";
	
?>