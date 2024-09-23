<?php

	final class Professor extends Pessoa
	{
		public function __construct(private string 	$carteiraProfissional	= '',
									private string	$titulacao				= '',
													$nome,
                                                    $cpf,
                                                    $logradouro,
                                                    $numero,
                                                    $bairro,
                                                    $cep,
                                                    $cidade,
                                                    $uf)
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
		public function getCarteiraProfissional()	{return $this -> carteiraProfissional;}
		public function getTitulacao()	{return $this -> titulacao;}

		// sets
		public function setCarteiraProfissional($carteriraP)	{$this -> carteiraProfissional	= $carteiraProfissional;}
		public function setTitulacao($titulacao)				{$this -> titulacao 			= $titulacao;}
	}
?>