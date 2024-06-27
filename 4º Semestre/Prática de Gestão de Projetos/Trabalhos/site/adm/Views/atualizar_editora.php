<?php
require_once "../Models/Conexao.php";
require_once "../Models/Editora.class.php";
require_once "../Models/EditoraDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edi_id = $_POST['edi_id'];
    $edi_nome = $_POST['edi_nome'];
    $edi_status = $_POST['edi_status'];

    $editora = new Editora();
    $editora->setEdi_id($edi_id);
    $editora->setEdi_nome($edi_nome);
    $editora->setEdi_status($edi_status);

    $editoraDAO = new EditoraDAO();
    $editoraDAO->atualizar($editora);

    header("Location: listar_editoras.php");
    exit;
} else {
    echo "Método não permitido.";
    exit;
}
?>
