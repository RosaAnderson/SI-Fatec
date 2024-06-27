<?php
require_once "../Models/Conexao.php";
require_once "../Models/Usuario.class.php";
require_once "../Models/UsuarioDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usu_id'], $_POST['usu_nome'], $_POST['usu_tipo'], $_POST['usu_cpf'], $_POST['usu_email'], $_POST['usu_status'])) {
        $usu_id = $_POST['usu_id'];
        $usu_nome = $_POST['usu_nome'];
        $usu_tipo = $_POST['usu_tipo'];
        $usu_cpf = $_POST['usu_cpf'];
        $usu_email = $_POST['usu_email'];
        $usu_status = $_POST['usu_status'];

        $usuario = new Usuario();
        $usuario->setUsu_id($usu_id);
        $usuario->setNome($usu_nome);
        $usuario->setUsu_tipo($usu_tipo);
        $usuario->setUsu_cpf($usu_cpf);
        $usuario->setUsu_email($usu_email);
        $usuario->setUsu_status($usu_status);

        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->atualizar($usuario);

        header("Location: listar_usuarios.php");
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Parâmetros inválidos.</div>";
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>Método de requisição inválido.</div>";
}
?>
