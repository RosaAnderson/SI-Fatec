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
?>