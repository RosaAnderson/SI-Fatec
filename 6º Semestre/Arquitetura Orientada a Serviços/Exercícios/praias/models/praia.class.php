<?php
	class Praia
	{
		public function __construct(private int $id_praia = 0,
									private string $nome = "",
									private string $cidade = "",
									private string $uf = "",
									private int $ranking = 0){}
		
		public function getIdPraia()	{return $this -> id_praia;}
		public function getNome()		{return $this -> nome;}
		public function getCidade()		{return $this -> cidade;}
		public function getUF()			{return $this -> uf;}
		public function getRanking()	{return $this -> ranking;}
	}
?>