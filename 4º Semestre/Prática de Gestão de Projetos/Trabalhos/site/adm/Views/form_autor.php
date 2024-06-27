<?php

    $msgerro = "";

    if($_POST){
        if(empty($_POST["nome"])){
            $msgerro = "O nome está vazio preencha por favor!";
        }
        else{
            require_once "../Models/Conexao.php";
            require_once "../Models/pessoa.class.php";
            require_once "../Models/Autor.class.php";
            require_once "../Models/AutorDAO.php";

            $autor = new Autor(
                0, 
                "Ativo", 
                $_POST["nome"]
            );

            $autorDAO = new AutorDAO();

            $autorDAO->inserir($autor);

            header("location:listar_autores.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php
            require_once "navbar.php";
        ?>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="card-title text-center">Cadastro de Autor</h1>

                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Autor</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome do autor" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : '' ?>">
                                <div><?php echo $msgerro; ?></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Cadastrar Autor</button>
                            </div>

                            <a href = 'listar_autores.php'>Lista de Autores</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>