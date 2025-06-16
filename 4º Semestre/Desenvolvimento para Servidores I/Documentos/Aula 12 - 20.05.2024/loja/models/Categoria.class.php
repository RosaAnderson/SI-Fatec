<?php
	class Categoria 
	{
		public function __construct(private int $idcategoria = 0, private string $descritivo = "", private string $status = ""){}
		
		public function getIdcategoria()
		{
			return $this->idcategoria;
		}
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		public function getStatus()
		{
			return $this->status;
		}
		
	}//fim da classe categoria
?>