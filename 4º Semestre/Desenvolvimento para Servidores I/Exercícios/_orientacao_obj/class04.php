<?php

	// PHP 8
	class Cliente
	{
		// metodo construtor
        public function __construct(private string $nome     = '',
                                  	private string $cpf      = '',
									private string $endereco = '', 
									private string $celular  = ''){}

		// gets
		public function getNome() 		{return $this -> nome;		}
		public function getCPF()  		{return $this -> cpf;		}
		public function getEndereco()	{return $this -> enderero;	}
		public function getCelular()	{return $this -> celular;	}

		// sets
		public function setNome($nome) 			{$this -> nome 		= $nome;		}
		public function setCPF($cpf)  			{$this -> cpf		= $cpf;			}
		public function setEndereco($endereco)	{$this -> enderero  = $endereco;	}
		public function setCelular($celular)	{$this -> celular   = $celular;		}

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