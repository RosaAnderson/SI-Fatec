<?php

class LivroAutorDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    public function inserir($livro_autor) {
        $sql = "INSERT INTO livros_autores (lau_liv_id, lau_aut_id) VALUES (?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(1, $livro_autor->getLau_liv_id());
        $stm->bindValue(2, $livro_autor->getLau_aut_id());
        $stm->execute();
        $this->db = null;
    }

    public function buscar_todos() {
        $sql = "SELECT * FROM livros_autores";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $this->db = null;
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

}

?>
