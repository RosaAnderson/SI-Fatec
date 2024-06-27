<?php
require_once "../Models/Conexao.php";
require_once "../Models/AutorDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aut_id = $_POST['aut_id'];
    $aut_nome = $_POST['aut_nome'];
    $aut_status = $_POST['aut_status'];

    $autor = new stdClass();
    $autor->aut_id = $aut_id;
    $autor->aut_nome = $aut_nome;
    $autor->aut_status = $aut_status;

    $autorDAO = new AutorDAO();
    $autorDAO->atualizar($autor);

    header("Location: listar_autores.php");
    exit();
} else {
    header("Location: editar_autor.php?aut_id={$aut_id}");
    exit();
}
?>
