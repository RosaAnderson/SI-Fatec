<?php
	class Cachorro
	{
		public function __construct(private string	$Nome			= "",
		                            private string	$Cor			= "",
									private string	$Raca			= "",
									private string	$Nascimento		= "",
									private 		$Proprietario	= null){}

		public function getNome()						{return $this -> Nome;}
		public function getCor()						{return $this -> Cor;}
		public function getRaca()						{return $this -> Raca;}
		public function getNascimento()					{return $this -> Nascimento;}
		public function getProprietario()				{return $this -> Proprietario;}

		public function setNome($Nome)					{$this -> Nome			= $Nome;}
		public function setCor($Cor)					{$this -> Cor			= $Cor;}
		public function setRaca($Raca)					{$this -> Raca			= $Raca;}
		public function setNascimento($Nascimento)		{$this -> Nascimento	= $Nascimento;}
		public function setProprietario($Proprietario)	{$this -> Proprietario	= $Proprietario;}
	}

?>