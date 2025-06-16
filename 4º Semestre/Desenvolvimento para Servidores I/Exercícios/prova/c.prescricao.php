<?php

	// 
	class Prescricao
	{
		// contrutor
		public function __construct(private string	$prescricao		= '',
								    private 		$medicamento	= null,
								    private 		$consulta		= null){}
	
		// gets
		public function getPrescricao()		{return $this -> prescricao;}
		public function getMedicamento()	{return $this -> medicamento;}
		public function getConsulta()		{return $this -> consulta;}

		// sets
		public function setPrescricao($prescricao)		{$this -> prescricao	= $prescricao;}
		public function setMedicamento($medicamento)	{$this -> medicamento	= $medicamento;}
		public function setConsulta($consulta)			{$this -> consulta		= $consulta;}
	}
?>