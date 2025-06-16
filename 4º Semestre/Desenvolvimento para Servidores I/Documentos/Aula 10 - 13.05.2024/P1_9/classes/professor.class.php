<?php
 	class Professor
 	{
 		
		public function __construct(private string $carteiraProfissional = "", private string $titulacao = ""){}
 		
 		function getCarteiraProfissional()
 		{
 			return $this->carteiraProfissional;
 		}
        function getTitulacao()
 		{
 			return $this->titulacao;
 		}
		
 		
 		function setCarteiraProfissional($carteiraProfissional)
 		{
 			$this->carteiraProfissional = $carteiraProfissional;
 		}
        function setTitulacao($titulacao)
 		{
 			$this->titulacao = $titulacao;
 		}
		
 	}
?>