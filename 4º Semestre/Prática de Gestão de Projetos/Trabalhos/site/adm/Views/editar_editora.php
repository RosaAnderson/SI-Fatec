<?php
require_once "../Models/Conexao.php";
require_once "../Models/EditoraDAO.php";

if(isset($_GET['edi_id'])) {
    $edi_id = $_GET['edi_id'];

    $editoraDAO = new EditoraDAO();
    $editora = $editoraDAO->buscar_por_id($edi_id);

    if(!$editora) {
        echo "Editora não encontrada.";
        exit;
    }
} else {
    echo "ID da editora não especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Editora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <?php require_once "navbar.php"; ?>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Editora</h1>
        <form action="atualizar_editora.php" method="POST">
            <input type="hidden" name="edi_id" value="<?php echo $editora->edi_id; ?>">
            <div class="mb-3">
                <label for="edi_nome" class="form-label">Nome da Editora</label>
                <input type="text" class="form-control" id="edi_nome" name="edi_nome" value="<?php echo $editora->edi_nome; ?>" required>
            </div>
            <div class="mb-3">
                <label for="edi_status" class="form-label">Status</label>
                <select id="edi_status" name="edi_status" class="form-select" required>
                    <option value="Ativo" <?php if($editora->edi_status == 'Ativo') echo 'selected'; ?>>Ativo</option>
                    <option value="Inativo" <?php if($editora->edi_status == 'Inativo') echo 'selected'; ?>>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="listar_editoras.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</body>
</html>
