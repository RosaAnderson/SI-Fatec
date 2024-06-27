<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Livro</h1>
        <form action="atualizar_livro.php" method="POST">
            <input type="hidden" name="liv_id" value="<?php echo $_GET['liv_id']; ?>">
            <?php
            require_once "../Models/Conexao.php";
            require_once "../Models/LivroDAO.php";
            require_once "../Models/Editora.class.php";
            require_once "../Models/EditoraDAO.php";

            if (isset($_GET['liv_id'])) {
                $livroDAO = new LivroDAO();
                $livro = $livroDAO->buscar_por_id($_GET['liv_id']);
                if ($livro) {
                    echo '
                        <div class="mb-3">
                            <label for="liv_titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="liv_titulo" name="liv_titulo" value="' . $livro->liv_titulo . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="liv_isbn" name="liv_isbn" value="' . $livro->liv_isbn . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_idioma" class="form-label">Idioma</label>
                            <input type="text" class="form-control" id="liv_idioma" name="liv_idioma" value="' . $livro->liv_idioma . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_formato" class="form-label">Formato</label>
                            <input type="text" class="form-control" id="liv_formato" name="liv_formato" value="' . $livro->liv_formato . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_genero" class="form-label">Gênero</label>
                            <input type="text" class="form-control" id="liv_genero" name="liv_genero" value="' . $livro->liv_genero . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_resumo" class="form-label">Resumo</label>
                            <textarea class="form-control" id="liv_resumo" name="liv_resumo" rows="3" required>' . $livro->liv_resumo . '</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="liv_numpagi" class="form-label">Páginas</label>
                            <input type="number" class="form-control" id="liv_numpagi" name="liv_numpagi" value="' . $livro->liv_numpagi . '" required>
                        </div>
                        <div class="mb-3">
                            <label for="liv_edi_id" class="form-label">Editora</label>
                            <select class="form-select" id="liv_edi_id" name="liv_edi_id" required>
                                <option value="">Selecione a editora</option>';

                    $editora = new Editora();
                    $editoraDAO = new EditoraDAO();
                    $editoras = $editoraDAO->buscar_todos();
                    foreach ($editoras as $dado) {
                        $selected = ($dado->edi_id == $livro->liv_edi_id) ? 'selected' : '';
                        echo "<option value='{$dado->edi_id}' $selected>{$dado->edi_nome}</option>";
                    }

                    echo '
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="liv_status" class="form-label">Status</label>
                            <select class="form-select" id="liv_status" name="liv_status" required>
                                <option value="Ativo" ' . ($livro->liv_status == "Ativo" ? "selected" : "") . '>Ativo</option>
                                <option value="Inativo" ' . ($livro->liv_status == "Inativo" ? "selected" : "") . '>Inativo</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Livro não encontrado.</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Parâmetro "liv_id" não encontrado.</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
