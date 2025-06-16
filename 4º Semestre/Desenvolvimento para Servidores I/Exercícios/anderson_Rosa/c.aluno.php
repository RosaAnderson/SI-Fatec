<?php

	final class Aluno extends Pessoa
	{
		public function __construct(private string 	$ra		= '',
													$nome,
                                                    $cpf,
                                                    $logradouro,
                                                    $numero,
                                                    $bairro,
                                                    $cep,
                                                    $cidade,
                                                    $uf,
									private array	$curso	= array())
		{
			parent:: __construct(	$nome,
									$cpf,
									$logradouro,
									$numero,
									$bairro,
									$cep,
									$cidade,
									$uf);
		}
	
		// gets
		public function getRA()		{return $this -> ra;}
		public function getCurso()	{return $this -> curso;}

		// sets
		public function setRA($ra)			{$this -> ra		= $ar;}
		public function setCurso($curso)	{$this -> curso[]	= $curso;}
	}
?>