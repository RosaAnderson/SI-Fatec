<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Tabela Autores</h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "../Models/Conexao.php";
                require_once "../Models/AutorDAO.php";

                $autorDAO = new AutorDAO();
                $autores = $autorDAO->buscar_todos();

                foreach ($autores as $autor) {
                    echo "<tr>
                        <td>{$autor->aut_id}</td>
                        <td>{$autor->aut_nome}</td>
                        <td>{$autor->aut_status}</td>
                        <td>
                            <a href='editar_autor.php?aut_id={$autor->aut_id}' class='btn btn-danger btn-sm'>Editar</a>";
                    
                    if ($autor->aut_status == "Ativo") {
                        echo "<a href='alterar_status.php?aut_id={$autor->aut_id}&aut_status=Inativo' class='btn btn-warning btn-sm'>Inativar</a>";
                    } else {
                        echo "<a href='alterar_status.php?aut_id={$autor->aut_id}&aut_status=Ativo' class='btn btn-warning btn-sm'>Ativar</a>";
                    }
                    
                    echo "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <a href='form_autor.php' class='btn btn-primary mt-3'>Cadastrar Autor Novamente</a>
    </div>

</body>
</html>
