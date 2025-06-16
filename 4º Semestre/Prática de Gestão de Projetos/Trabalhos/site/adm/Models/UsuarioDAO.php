<?php

require_once "Conexao.php";

    class UsuarioDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }

        public function inserir($usuario){
            $sql = "INSERT INTO usuarios (usu_id, usu_status, usu_tipo, usu_nome, usu_cpf, usu_dnasc, usu_email, usu_senha, usu_data) VALUES(?,?,?,?,?,?,?,?, CURRENT_TIMESTAMP)";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usuario->getUsu_id());
            $stm->bindValue(2, $usuario->getUsu_status());
            $stm->bindValue(3, $usuario->getUsu_tipo());
            $stm->bindValue(4, $usuario->getNome());
            $stm->bindValue(5, $usuario->getUsu_cpf());
            $stm->bindValue(6, $usuario->getUsu_dnasc());
            $stm->bindValue(7, $usuario->getUsu_email());
            $stm->bindValue(8, $usuario->getUsu_senha());
            $stm->execute();
            
            $idusuario = $this->db->lastInsertId();
            return $idusuario;

            $this->db = null;
        }

        public function buscar_usuarios_ativas($usuario)
        {
            $sql = "SELECT * FROM usuarios WHERE usu_status = ?";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1,$usuario->getusu_status());
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            $this->db = null;
        }

        public function buscar_todos()
        {
            $sql = "SELECT * FROM usuarios";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function alterar_status_usuario($usuario)
        {
            $sql = "UPDATE usuarios SET usu_status = ? WHERE usu_id = ?";
            
            $stm = $this->db->prepare($sql);
            
            $stm -> bindValue(1, $usuario -> getUsu_status());
            $stm -> bindValue(2, $usuario -> getUsu_id());
            
            $stm -> execute();
            
            $this -> db = null;
        }

        public function buscar_por_id($usu_id)
        {
            $sql = "SELECT * FROM usuarios WHERE usu_id = ?";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usu_id);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
            $this->db = null;
        }

        public function atualizar($usuario) {
            $sql = "UPDATE usuarios SET usu_nome = ?, usu_tipo = ?, usu_cpf = ?, usu_email = ?, usu_status = ? WHERE usu_id = ?";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usuario->getNome()); // Ajuste de acordo com os métodos getters da classe Usuario
            $stm->bindValue(2, $usuario->getUsu_tipo());
            $stm->bindValue(3, $usuario->getUsu_cpf());
            $stm->bindValue(4, $usuario->getUsu_email());
            $stm->bindValue(5, $usuario->getUsu_status());
            $stm->bindValue(6, $usuario->getUsu_id());
            $stm->execute();
            $this->db = null;
        }
    }
?>