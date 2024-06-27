<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Tabela Usuários</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone(s)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "../Models/Conexao.php";
                require_once "../Models/UsuarioDAO.php";
                require_once "../Models/TelefoneDAO.php";

                $usuarioDAO = new UsuarioDAO();
                $usuarios = $usuarioDAO->buscar_todos();

                foreach ($usuarios as $usuario) {
                    // Exibindo informações básicas do usuário
                    echo "<tr>
                        <td>{$usuario->usu_id}</td>
                        <td>{$usuario->usu_status}</td>
                        <td>{$usuario->usu_nome}</td>
                        <td>{$usuario->usu_tipo}</td>
                        <td>{$usuario->usu_cpf}</td>
                        <td>{$usuario->usu_email}</td>
                        <td>";

                    // Buscando os telefones do usuário
                    $telefoneDAO = new TelefoneDAO();
                    $telefones = $telefoneDAO->buscar_por_usuario($usuario->usu_id);

                    // Iterando sobre os telefones encontrados
                    foreach ($telefones as $telefone) {
                        echo "({$telefone->tel_ddd}) {$telefone->tel_num}<br>";
                    }

                    echo "</td>
                        <td>
                            <a href='editar_usuario.php?usu_id={$usuario->usu_id}' class='btn btn-danger btn-sm'>Editar</a>";
                    
                    // Botão para alterar status
                    if ($usuario->usu_status == "Ativo") {
                        echo "<a href='alterar_status_usuario.php?usu_id={$usuario->usu_id}&usu_status=Inativo' class='btn btn-warning btn-sm'>Inativar</a>";
                    } else {
                        echo "<a href='alterar_status_usuario.php?usu_id={$usuario->usu_id}&usu_status=Ativo' class='btn btn-warning btn-sm'>Ativar</a>";
                    }
                    
                    echo "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <a href='cadastro_usuario.php' class='btn btn-primary mt-3'>Cadastrar Novo Usuário</a>
    </div>

</body>
</html>
