<?php
	class Pessoa
	{
			
		function __construct(protected string $nome = "",protected string $cpf = ""){}
 		
 		function getNome()
 		{
 			return $this->nome;
 		}

        function getCpf()
 		{
 			return $this->cpf;
 		}
		
		
 		function setNome($nome)
 		{
 			$this->nome = $nome;
 		}

        function setCpf($cpf)
 		{
 			$this->cpf = $cpf;
 		}
		
		
	}
?>