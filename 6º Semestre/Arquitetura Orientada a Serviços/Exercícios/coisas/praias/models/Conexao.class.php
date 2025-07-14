<?php
	abstract class Conexao
	{
		public function __construct(protected $db = null)
		{
		try
		{
			$parametros = "mysql:server=localhost;dbname=praias";
			$this->db = new PDO($parametros, "root", "");
		}
		catch(PDOException $e)
		{
			die("conexão com problema");
		}
	}
}
?>