<?php

echo "
    <div class='container-fluid'>
            <a class='navbar-brand' href='index.php'>MrBooks</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='index.php'>Início</a>
                    </li>
                    <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Painel de ADM
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='form_editora.php'>Cadastro Editoras</a></li>
                        <li><a class='dropdown-item' href='form_autor.php'>Cadastro Autores</a></li>
                        <li><a class='dropdown-item' href='form_livro.php'>Cadastro Livro</a></li>
                        <li><a class='dropdown-item' href='cadastro_usuario.php'>Cadastro de Usuários</a></li>
                        <li><a class='dropdown-item' href='listar_editoras.php'>Listar Editoras</a></li>
                        <li><a class='dropdown-item' href='listar_autores.php'>Listar Autores</a></li>
                        <li><a class='dropdown-item' href='listar_livros.php'>Listar Livros</a></li>
                        <li><a class='dropdown-item' href='listar_usuarios.php'>Listar Usuários</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
";

?>