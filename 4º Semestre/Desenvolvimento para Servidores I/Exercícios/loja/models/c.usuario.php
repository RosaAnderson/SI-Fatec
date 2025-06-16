<?php

	// 
	class Usuario
	{
		// contrutor
		public function __construct(private int 	$idusuario	= 0,
									private string	$nome		= '',
									private string	$email		= '',
								    private string	$senha  	= '',
									private string	$tipo		= ''){}
	
		// gets
		public function getIdUsuario()	{return $this -> idusuario	;}
		public function getNome	() 		{return $this -> nome		;}
		public function getEmail()  	{return $this -> email		;}
		public function getSenha()		{return $this -> senha  	;}
        public function getTipo()		{return $this -> tipo		;}
		
		// sets
		public function setIdUsuario($idusuario)	{$this -> idusuario	= $idusuario;}
		public function setNome	($nome)				{$this -> nome		= $nome		;}
		public function setEmail($email)			{$this -> email		= $email	;}
		public function setSenha($senha)			{$this -> senha  	= $senha	;}
		public function setTipo($tipo)		        {$this -> tipo		= $tipo		;}
		
		// metodo
	}
?>