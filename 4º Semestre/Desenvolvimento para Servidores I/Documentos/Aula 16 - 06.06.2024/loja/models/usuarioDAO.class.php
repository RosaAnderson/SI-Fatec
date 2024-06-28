<?php
	//herança com conexão
	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function verificar_login($usuario)
		{
			$sql = "SELECT idusuario, nome, perfil FROM usuarios WHERE email = ? AND senha = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $usuario->getEmail());
			$stm->bindValue(2, $usuario->getSenha());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		
	}//fim da classe
?>