<?php
	//PHP 8
	class Cliente1
	{
		//método construtor
		
		public function __construct(public string $nome = "", public string $cpf = "", public string $endereco = "", public string $celular = ""){}
		
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