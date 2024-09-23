<?php

	// PHP 8
	class Cliente
	{
		// metodo construtor
        public function __construct(public string $nome     = '',
                                  	public string $cpf      = '',
									public string $endereco = '', 
									public string $celular  = ''){}

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
//	$obj01 = new Cliente('Anderson Rosa', '010.101.000-01', 'Rua João Alberto Scenna, 21', '19 99906 5400');
	$obj01 = new Cliente('Anderson Rosa', endereco: 'Rua João Alberto Scenna, 21');
	
	echo $obj01 -> inserir();
	
	$obj01 -> editar("Jonas");
	
	//$obj01 -> inserir();
	
	echo $obj01 -> inserir();
	
	// exibe o conteudo do objeto
	echo "<pre>";
		var_dump($obj01);
	echo "</pre>";
	
?>