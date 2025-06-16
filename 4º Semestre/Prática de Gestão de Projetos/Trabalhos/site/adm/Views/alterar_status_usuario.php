<?php
require_once "../Models/Conexao.php";
require_once "../Models/Usuario.class.php";
require_once "../Models/UsuarioDAO.php";

if (isset($_GET['usu_id']) && isset($_GET['usu_status'])) {
    $usu_id = $_GET['usu_id'];
    $usu_status = $_GET['usu_status'];

    $usuario = new Usuario();
    $usuario->setUsu_id($usu_id);
    $usuario->setUsu_status($usu_status);

    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->alterar_status_usuario($usuario);

    header("Location: listar_usuarios.php");
    exit();
} else {
    echo "<div class='alert alert-danger' role='alert'>Parâmetros inválidos.</div>";
}
?>
