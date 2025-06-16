<?php
require_once "../Models/Conexao.php";
require_once "../Models/AutorDAO.php";

if(isset($_GET['aut_id'])) {
    $aut_id = $_GET['aut_id'];

    $autorDAO = new AutorDAO();
    $autor = $autorDAO->buscar_por_id($aut_id);

    if(!$autor) {
        echo "Autor não encontrado.";
        exit;
    }
} else {
    echo "ID do autor não especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Autor</h1>

        <form action="atualizar_autor.php" method="POST">
            <input type="hidden" name="aut_id" value="<?php echo $autor->aut_id; ?>">
            <div class="mb-3">
                <label for="aut_nome" class="form-label">Nome do Autor</label>
                <input type="text" class="form-control" id="aut_nome" name="aut_nome" value="<?php echo $autor->aut_nome; ?>" required>
            </div>
            <div class="mb-3">
                <label for="aut_status" class="form-label">Status</label>
                <select id="aut_status" name="aut_status" class="form-select" required>
                    <option value="Ativo" <?php if($autor->aut_status == 'Ativo') echo 'selected'; ?>>Ativo</option>
                    <option value="Inativo" <?php if($autor->aut_status == 'Inativo') echo 'selected'; ?>>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="listar_autores.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</body>
</html>
