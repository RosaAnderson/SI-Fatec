<?php

	// 
	class Consulta
	{
		// contrutor
		public function __construct(private string	$data			= '',
								    private string	$hora			= '',
									private array	$exame			= array(),
									private array	$medico			= array(),
								    private array	$paciente		= array(),
								    private array	$medicamento	= array()){}
	
		// gets
		public function getData()			{return $this -> data;			}
		public function getHora()			{return $this -> hora;			}
		public function getExame()			{return $this -> exame;			}
		public function getMedico()			{return $this -> medico;		}
		public function getPaciente()		{return $this -> paciente;		}
		public function getMedicamento()	{return $this -> medicamento;	}

		// sets
		public function setData($data)					{$this -> data			= $data;		}
		public function setHora($hora)					{$this -> hora			= $hora;		}
		public function setExame($exame)				{$this -> exame[]		= $exame;		}		
		public function setMedico($medico)				{$this -> medico[]		= $medico;		}		
		public function setPaciente($paciente)			{$this -> paciente[]	= $paciente;	}		
		public function setMedicamento($medicamento)	{$this -> medicamento[]	= $medicamento;	}		
	}
?>