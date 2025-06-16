<?php
	class Atendimento
	{
		public function __construct(private string	$Data		= "",
									private array	$Servico	= array(),
									private 		$Cachorro	= null){}

		public function getData()				{return $this -> Data;}
		public function getServico()			{return $this -> Servico;}
		public function getCachorro()			{return $this -> Cachorro;}

		public function setData($Data)			{$this -> Data		= $Data;}		
		public function setServico($Servico)	{$this -> Servico[]	= $Servico;}		
		public function setCachorro($Cachorro)	{$this -> Cachorro	= $Cachorro;}		
	}

?>