<?php

	// 
	class Funcionario
	{
		// contrutor
		public function __construct(private string	$nome			= '',
								    private string	$cargo			= '',
								    private float	$salario		= 0.00,
								    private 		$chefe			= null,
									private array	$subordinado	= array()){}
	
		// gets
		public function getNome()			{return $this -> nome;			}
		public function getCargo() 			{return $this -> cargo;			}
		public function getSalario()		{return $this -> salario;		}
		public function getChefe() 			{return $this -> chefe;			}
		public function getSubordinado()	{return $this -> subordinado;	}

		// sets
		public function setNome($nome)					{$this -> nome			= $nome;		}
		public function setCargo($cargo) 				{$this -> cargo			= $cargo;		}
		public function setSalario($salario)			{$this -> salario		= $salario;		}
		public function setChefe($chefe) 				{$this -> chefe			= $chefe;		}
		public function setSubordinado($subordinado)	{$this -> subordinado[]	= $subordinado;	}		
	}
?>