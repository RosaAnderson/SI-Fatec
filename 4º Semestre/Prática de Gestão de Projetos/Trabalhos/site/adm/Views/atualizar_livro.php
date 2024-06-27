<?php
// atualizar_livro.php

require_once "../Models/Conexao.php";
require_once "../Models/Livro.class.php";
require_once "../Models/LivroDAO.php";
require_once "../Models/EditoraDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $liv_id = $_POST['liv_id'];
    $liv_titulo = $_POST['liv_titulo'];
    $liv_isbn = $_POST['liv_isbn'];
    $liv_idioma = $_POST['liv_idioma'];
    $liv_formato = $_POST['liv_formato'];
    $liv_genero = $_POST['liv_genero'];
    $liv_resumo = $_POST['liv_resumo'];
    $liv_numpagi = $_POST['liv_numpagi'];
    $liv_edi_id = $_POST['liv_edi_id'];
    $liv_status = $_POST['liv_status'];

    // Instanciar o Livro e atualizar os dados
    $livro = new Livro();
    $livro->setLiv_id($liv_id);
    $livro->setLiv_titulo($liv_titulo);
    $livro->setLiv_isbn($liv_isbn);
    $livro->setLiv_idioma($liv_idioma);
    $livro->setLiv_formato($liv_formato);
    $livro->setLiv_genero($liv_genero);
    $livro->setLiv_resumo($liv_resumo);
    $livro->setLiv_numpag($liv_numpagi);
    $livro->setLiv_edi_id($liv_edi_id);
    $livro->setLiv_status($liv_status);

    // Atualizar no banco de dados
    $livroDAO = new LivroDAO();
    $livroDAO->atualizar($livro);

    // Redirecionar para a página de listagem de livros ou para onde desejar
    header("Location: listar_livros.php");
    exit();
}
?>
