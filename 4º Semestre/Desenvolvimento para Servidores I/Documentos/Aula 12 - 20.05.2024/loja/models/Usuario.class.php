<?php
	class Usuario
	{
		public function __construct(private int $idusuario = 0, private string $nome = "", private string $email = "", private string $senha = "", private string $perfil = ""){}
		
		public function getIdusuario()
		{
			return $this->idusuario;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		
		public function getSenha()
		{
			return $this->senha;
		}
		
		public function getPerfil()
		{
			return $this->perfil;
		}
	}//fim da classe
?>