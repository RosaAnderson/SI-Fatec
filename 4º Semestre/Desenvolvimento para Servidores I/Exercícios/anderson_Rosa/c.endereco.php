<?php

	// 
	class Endereco
	{
		// contrutor
		public function __construct(private string	$logradouro	= '',
								    private string	$numero		= '',
									private string	$bairro 	= '',
									private string	$cep 		= '',
									private string	$cidade 	= '',
									private string	$uf 		= ''){}												
	
		// gets
		public function getLogradouro()	{return $this -> logradouro;}
		public function getNumero()		{return $this -> numero;}
		public function getBairro()		{return $this -> bairro;}
		public function getCEP()		{return $this -> cep;}
		public function getcidade()		{return $this -> cidade;}
		public function getUF()			{return $this -> uf;}

		// sets
		public function setLogradouro($logradouro)	{$this -> logradouro	= $logradouro;}
		public function setNumero($numero)			{$this -> numero		= $numero;}
		public function setBairro($bairro)			{$this -> bairro 		= $bairro;}
		public function setCEP($cep)				{$this -> cep 			= $cep ;}
		public function setcidade($cidade)			{$this -> cidade 		= $cidade;}
		public function setUF($uf)					{$this -> uf 			= $uf;}

	}
?>