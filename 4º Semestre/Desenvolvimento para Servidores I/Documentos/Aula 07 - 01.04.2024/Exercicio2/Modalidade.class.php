<?php
	class Modalidade
	{
		public function __construct(private string $descritivo = "", private array $professor = array()){}
		
		
		
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		
		public function getProfessor()
		{
			return $this->professor;
		}
		
	}
?>