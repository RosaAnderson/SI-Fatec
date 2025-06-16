<?php

	class Endereco
	{
		// contrutor
		public function __construct(private string	$logradouro		= '',
								    private string	$numero			= '',
								    private string 	$bairro			= '',
									private string	$cep			= ''/*,

									private			$aluno			= null*/){}
	
		// gets
		public function getLogradouro()	{return $this -> logradouro;}
		public function getNumero() 	{return $this -> numero;	}
		public function getBairro()  	{return $this -> bairro;	}
		public function getCep()	 	{return $this -> cep;		}
		public function getAluno() 		{return $this -> aluno;		}

		// sets
		public function setLogradouro($logradouro)	{$this -> logradouro	= $logradouro; 	}
		public function setNumero($numero) 			{$this -> numero		= $numero;		}
		public function setBairro($bairro)			{$this -> bairro 		= $bairro;		}
		public function setCep($cep)				{$this -> cep 			= $cep;			}
		public function setAluno($aluno)			{$this -> aluno 		= $aluno;		}
	}
?>