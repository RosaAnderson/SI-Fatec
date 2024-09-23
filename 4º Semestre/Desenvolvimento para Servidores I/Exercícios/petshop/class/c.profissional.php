<?php

	final class Profissional extends Pessoa
	{
		public function __construct(private string 	$CRMV 			= "",
													$Nome,
													$Telefone,
									private	array	$Atendimento 	= array());
		{
			parent:: __construct($Nome, $Telefone);
		}

		public function getCRMV()			{return $this -> CRMV;}
		public function getAtendimento()	{return $this -> Atendimento;}

		public function setCRMV($CRMV)					{$this -> CRMV = $CRMV;}		
		public function setAtendimento($Atendimento)	{$this -> Atendimento[] = $Atendimento;}		
	}

?>