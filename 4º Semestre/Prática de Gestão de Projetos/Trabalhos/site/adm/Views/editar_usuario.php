<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Usuário</h1>

        <?php
        require_once "../Models/Conexao.php";
        require_once "../Models/UsuarioDAO.php";

        if (isset($_GET['usu_id'])) {
            $usu_id = $_GET['usu_id'];
            $usuarioDAO = new UsuarioDAO();
            $usuario = $usuarioDAO->buscar_por_id($usu_id);

            if ($usuario) {
                echo "<form action='atualizar_usuario.php' method='POST'>
                        <input type='hidden' name='usu_id' value='{$usuario->usu_id}'>

                        <div class='mb-3'>
                            <label for='usu_nome' class='form-label'>Nome</label>
                            <input type='text' class='form-control' id='usu_nome' name='usu_nome' value='{$usuario->usu_nome}' required>
                        </div>
                        <div class='mb-3'>
                            <label for='usu_tipo' class='form-label'>Tipo</label>
                            <input type='text' class='form-control' id='usu_tipo' name='usu_tipo' value='{$usuario->usu_tipo}' required>
                        </div>
                        <div class='mb-3'>
                            <label for='usu_cpf' class='form-label'>CPF</label>
                            <input type='text' class='form-control' id='usu_cpf' name='usu_cpf' value='{$usuario->usu_cpf}' required>
                        </div>
                        <div class='mb-3'>
                            <label for='usu_email' class='form-label'>Email</label>
                            <input type='email' class='form-control' id='usu_email' name='usu_email' value='{$usuario->usu_email}' required>
                        </div>
                        <div class='mb-3'>
                            <label for='usu_status' class='form-label'>Status</label>
                            <select class='form-select' id='usu_status' name='usu_status' required>
                                <option value='Ativo' " . ($usuario->usu_status == 'Ativo' ? 'selected' : '') . ">Ativo</option>
                                <option value='Inativo' " . ($usuario->usu_status == 'Inativo' ? 'selected' : '') . ">Inativo</option>
                            </select>
                        </div>
                        <button type='submit' class='btn btn-primary'>Atualizar</button>
                    </form>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Usuário não encontrado.</div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>Parâmetro 'usu_id' não especificado.</div>";
        }
        ?>

        <a href='listar_usuarios.php' class='btn btn-secondary mt-3'>Voltar</a>
    </div>

</body>
</html>
