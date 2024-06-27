<?php

    class LivroDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }

        public function inserir($livro){
            $sql = "INSERT INTO livros (liv_id, liv_titulo, liv_isbn, liv_idioma, liv_formato, liv_genero, liv_resumo, liv_numpagi, liv_edi_id, liv_status, lau_aut_id) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $livro->getLiv_id());
            $stm->bindValue(2, $livro->getLiv_titulo());
            $stm->bindValue(3, $livro->getLiv_isbn());
            $stm->bindValue(4, $livro->getLiv_idioma());
            $stm->bindValue(5, $livro->getLiv_formato());
            $stm->bindValue(6, $livro->getLiv_genero());
            $stm->bindValue(7, $livro->getLiv_resumo());
            $stm->bindValue(8, $livro->getLiv_numpag());
            $stm->bindValue(9, $livro->getLiv_edi_id());
            $stm->bindValue(10, $livro->getLiv_status());
            $stm->bindValue(11, $livro->getLiv_aut_id());
            $stm->execute();

            $idlivro = $this->db->lastInsertId();
            return $idlivro;

            $this->db = null;
        }

        public function alterar_status_livros($Livro){
            $sql = "UPDATE livros SET liv_status = ? WHERE liv_id = ?";
            
            $stm = $this->db->prepare($sql);
            
            $stm -> bindValue(1, $Livro -> getLiv_status());
            $stm -> bindValue(2, $Livro -> getLiv_id());
            
            $stm -> execute();
            
            $this -> db = null;
        }

        public function buscar_todos()
        {
            $sql = "SELECT l.*, e.edi_nome AS nome_editora FROM livros l JOIN editoras e ON l.liv_edi_id = e.edi_id";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

    public function atualizar($livro) {
        $sql = "UPDATE livros SET liv_titulo=?, liv_isbn=?, liv_idioma=?, liv_formato=?, liv_genero=?, liv_resumo=?, liv_numpagi=?, liv_edi_id=?, liv_status=? WHERE liv_id=?";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(1, $livro->getLiv_titulo());
        $stm->bindValue(2, $livro->getLiv_isbn());
        $stm->bindValue(3, $livro->getLiv_idioma());
        $stm->bindValue(4, $livro->getLiv_formato());
        $stm->bindValue(5, $livro->getLiv_genero());
        $stm->bindValue(6, $livro->getLiv_resumo());
        $stm->bindValue(7, $livro->getLiv_numpag());
        $stm->bindValue(8, $livro->getLiv_edi_id());
        $stm->bindValue(9, $livro->getLiv_status());
        $stm->bindValue(10, $livro->getLiv_id());
        $stm->execute();
        $this->db = null;
    }

    public function buscar_por_id($liv_id) {
        $sql = "SELECT * FROM livros WHERE liv_id = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(1, $liv_id);
        $stm->execute();
        $livro = $stm->fetch(PDO::FETCH_OBJ);
        return $livro; // Retorna o livro encontrado ou NULL se não encontrar
    }
    

    }
?>