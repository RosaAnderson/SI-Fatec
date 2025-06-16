<?php

    class EnderecoDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }

        public function inserir($endereco){
            $sql = "INSERT INTO enderecos (end_id, end_numero, end_bairro, end_uf, end_cidade, end_cep, end_complemento, end_logradouro, end_usu_id) VALUES(?,?,?,?,?,?,?,?,?)";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $endereco->getEnd_id());
            $stm->bindValue(2, $endereco->getEnd_numero());
            $stm->bindValue(3, $endereco->getEnd_bairro());
            $stm->bindValue(4, $endereco->getEnd_uf());
            $stm->bindValue(5, $endereco->getEnd_cidade());
            $stm->bindValue(6, $endereco->getEnd_cep());
            $stm->bindValue(8, $endereco->getEnd_complemento());
            $stm->bindValue(7, $endereco->getEnd_logradouro());
            $stm->bindValue(9, $endereco->getEnd_usu_id());
            $stm->execute();
            $this->db = null;
        }

        public function buscar_todos()
        {
            $sql = "SELECT * FROM enderecos";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>