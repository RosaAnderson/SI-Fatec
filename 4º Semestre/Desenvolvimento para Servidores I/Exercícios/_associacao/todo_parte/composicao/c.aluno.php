<?php

	class Aluno
	{
		// contrutor
		public function __construct(private string	$nome		= '',
								    private string	$CPF		= '',
								    private string 	$celular	= '',

													$logradouro	= '',
													$numero		= '',
													$bairro		= '',
													$cep		= '')
		{
			$this -> endereco[] = new Endereco($logradouro,
												$numero,
												$bairro,
												$cep);
		}
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getCPF() 		{return $this -> CPF;		}
		public function getCelular()  	{return $this -> celular;	}
		public function getEndereco()  	{return $this -> endereco;	}

		// sets
		public function setNome($nome)		{$this -> nome		= $nome; 	}
		public function setCPF($CPF) 		{$this -> CPF		= $CPF;		}
		public function setCeluar($celular)	{$this -> celular 	= $celular;	}
/**		
		public function setEndereco($logradouro,
									$numero,
									$bairro,
									$cep)
		{
			$this -> endereco[] = new Endereco(	$logradouro,
												$numero,
												$bairro,
												$cep);
		}
/**/
	}
?>