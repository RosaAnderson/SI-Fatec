<?php
	abstract class Conexao
	{
		public function __construct(protected $db = null)
		{
			$parametros = "mysql:host=localhost;dbname=loja;";
			
			$this->db = new PDO($parametros, "root", "");
		}
	}
?>