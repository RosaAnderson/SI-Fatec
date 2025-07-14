<?php
	class Doacao
	{
		public function __construct(private int		$iddoacao 		= 0,
									private string 	$data_doacao 	= '',
									private string	$descricao		= '',
									private 		$iddoador 		= null,
									private			$idtipo			= null){}
		
		public function getIdDoacao()	{return $this -> iddoacao;}
		public function getDataDoacao()	{return $this -> data_doacao;}
		public function getDescricao()	{return $this -> descricao;}
		public function getDoador()		{return $this -> iddoador;}
		public function getTipo()		{return $this -> idtipo;}
	}

/*
iddoacao
data_doacao
descricao
iddoador
idtipo
*/

?>