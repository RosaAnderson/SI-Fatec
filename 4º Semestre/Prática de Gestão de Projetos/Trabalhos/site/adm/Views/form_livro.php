<?php
require_once "../Models/Conexao.php";
require_once "../Models/Pessoa.class.php";
require_once "../Models/Livro.class.php";
require_once "../Models/LivroDAO.php";
require_once "../Models/LivroAutor.class.php";
require_once "../Models/LivroAutorDAO.php";
require_once "../Models/Autor.class.php";
require_once "../Models/AutorDAO.php";
require_once "../Models/Editora.class.php";
require_once "../Models/EditoraDAO.php";

$msgerro = array("", "", "", "", "", "", "", "", "");
$erro = false;

if ($_POST) {
    if (empty($_POST["titulo"])) {
        $msgerro[0] = "O título está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["ISBN"])) {
        $msgerro[1] = "O ISBN está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["editora"])) {
        $msgerro[2] = "A editora não foi selecionada, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["autor"])) {
        $msgerro[3] = "O autor não foi selecionado, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["idioma"])) {
        $msgerro[4] = "O idioma está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["formato"])) {
        $msgerro[5] = "O formato está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["genero"])) {
        $msgerro[6] = "O gênero está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["resumo"])) {
        $msgerro[7] = "O resumo está vazio, preencha por favor!";
        $erro = true;
    }
    if (empty($_POST["npaginas"])) {
        $msgerro[8] = "O número de páginas está vazio, preencha por favor!";
        $erro = true;
    }

    $editora_id = $_POST["editora"];
    $autor_id = $_POST["autor"];

    if (!$erro) {
        $livro = new Livro(
            0,
            $_POST["npaginas"],
            "Ativo",
            $_POST["titulo"],
            $_POST["ISBN"],
            $_POST["idioma"],
            $_POST["formato"],
            $_POST["genero"],
            $_POST["resumo"],
            $editora_id,
            $_POST["autor"]
        );

        $LivroDAO = new LivroDAO();

        $idlivro = $LivroDAO->inserir($livro);

        $livro_autor = new LivroAutor(
            $idlivro,
            $_POST['autor']
        );

        $livro_autorDAO = new LivroAutorDAO();
        $livro_autorDAO->inserir($livro_autor);

        header("location:listar_livros.php");

        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="card-title text-center">Cadastro de Livro</h1>

                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Digite o título do livro" value="<?php echo isset($_POST['titulo']) ? $_POST['titulo'] : '' ?>">
                                <div><?php echo $msgerro[0]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="ISBN" class="form-label">ISBN do Livro</label>
                                <input type="text" name="ISBN" class="form-control" id="ISBN" placeholder="Digite o ISBN do livro" value="<?php echo isset($_POST['ISBN']) ? $_POST['ISBN'] : '' ?>">
                                <div><?php echo $msgerro[1]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="editora" class="form-label">Editora</label>
                                <select id="editora" name="editora" class="form-select">
                                    <option value="0">Escolha uma editora</option>
                                    <?php
                                        $editora = new Editora(edi_status:"Ativo");
                                        $editoraDAO = new EditoraDAO();
                                        $ret = $editoraDAO->buscar_editoras_ativas($editora);
                                        foreach ($ret as $dado) {
                                            $selected = isset($_POST["editora"]) && $_POST["editora"] == $dado->edi_id ? 'selected' : '';
                                            echo "<option value='{$dado->edi_id}' $selected>{$dado->edi_nome}</option>";
                                        }
                                    ?>
                                </select>
                                <div><?php echo $msgerro[2]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="autor" class="form-label">Autor</label>
                                <select id="autor" name="autor" class="form-select">
                                    <option value="0">Escolha um autor</option>
                                    <?php
                                    $autorDAO = new AutorDAO();
                                    $autores = $autorDAO->buscar_autores_ativos();

                                    foreach ($autores as $autor) {
                                        $selected = isset($_POST["autor"]) && $_POST["autor"] == $autor->aut_id ? 'selected' : '';
                                        echo "<option value='{$autor->aut_id}' $selected>{$autor->aut_nome}</option>";
                                    }
                                    ?>
                                </select>
                                <div><?php echo $msgerro[3]; ?></div>
                            </div>


                            <div class="mb-3">
                                <label for="idioma" class="form-label">Idioma</label>
                                <input type="text" name="idioma" class="form-control" id="idioma" placeholder="Digite o idioma do livro" value="<?php echo isset($_POST['idioma']) ? $_POST['idioma'] : '' ?>">
                                <div><?php echo $msgerro[4]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="formato" class="form-label">Formato</label>
                                <input type="text" name="formato" class="form-control" id="formato" placeholder="Digite o formato do livro" value="<?php echo isset($_POST['formato']) ? $_POST['formato'] : '' ?>">
                                <div><?php echo $msgerro[5]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="genero" class="form-label">Gênero</label>
                                <input type="text" name="genero" class="form-control" id="genero" placeholder="Digite o gênero do livro" value="<?php echo isset($_POST['genero']) ? $_POST['genero'] : '' ?>">
                                <div><?php echo $msgerro[6]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="resumo" class="form-label">Resumo</label>
                                <textarea name="resumo" class="form-control" id="resumo" placeholder="Digite o resumo do livro" rows="4" maxlength="500"><?php echo isset($_POST['resumo']) ? $_POST['resumo'] : ''; ?></textarea>
                                <div><?php echo $msgerro[7]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="npaginas" class="form-label">Número de Páginas</label>
                                <input type="number" name="npaginas" class="form-control" id="npaginas" placeholder="Digite o número de páginas do livro" value="<?php echo isset($_POST['npaginas']) ? $_POST['npaginas'] : '' ?>">
                                <div><?php echo $msgerro[8]; ?></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
