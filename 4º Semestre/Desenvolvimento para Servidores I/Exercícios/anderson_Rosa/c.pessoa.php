<?php

	// 
	abstract class Pessoa
	{
		// contrutor
		public function __construct(protected string	$nome			= '',
								    protected string	$cpf			= '',
														$logradouro		= '',
														$numero			= '',
														$bairro 		= '',
														$cep 			= '',
														$cidade 		= '',
														$uf 			= '')
		{
			$this -> endereco[] = new Endereco(	$logradouro,
												$numero,
												$bairro,	
												$cep,	
												$cidade,
												$uf);
		}												
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getCPF()		{return $this -> cpf;		}
		public function getEndereco()	{return $this -> endereco;	}

		// sets
		public function setNome($nome)	{$this -> nome		= $nome;}
		public function setCPF($cpf)	{$this -> cpf		= $cpf;	}

		public function setEndereco($logradouro,
		                            $numero,
		                            $bairro,	
		                            $cep,	
		                            $cidade,
		                            $uf)
		{
			$this -> endereco[] = new Endereco(	$logradouro,												
												$numero,
												$bairro,	
												$cep,	
												$cidade,
												$uf);
		}
	}
?>