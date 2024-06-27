<?php

    require_once "../Models/Conexao.php";
    require_once "../Models/Pessoa.class.php";
    require_once "../Models/Usuario.class.php";
    require_once "../Models/UsuarioDAO.php";
    require_once "../Models/Telefone.class.php";
    require_once "../Models/TelefoneDAO.php";
    require_once "../Models/Endereco.class.php";
    require_once "../Models/EnderecoDAO.php";


    $msgerro = array("","","","","","","","","","","","","","");
    $erro = false;

    if ($_POST) {
        if (empty($_POST["nome"])) {
            $msgerro[0] = "O nome está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["email"])) {
            $msgerro[1] = "O e-mail está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["senha"])) {
            $msgerro[2] = "A senha está vazia, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["cpf"])) {
            $msgerro[3] = "O cpf está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["datanasc"])) {
            $msgerro[4] = "A data está vazia, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["tipo"])) {
            $msgerro[5] = "O tipo de usuario está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["ddd"])) {
            $msgerro[6] = "O DDD está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["telefone"])) {
            $msgerro[7] = "O número de telefone está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["logradouro"])) {
            $msgerro[8] = "O logradouro está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["numerocasa"])) {
            $msgerro[9] = "O número da casa está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["bairro"])) {
            $msgerro[10] = "O bairro está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["cep"])) {
            $msgerro[11] = "O CEP está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["uf"])) {
            $msgerro[12] = "O UF está vazio, preencha por favor!";
            $erro = true;
        }
        if (empty($_POST["cidade"])) {
            $msgerro[13] = "A cidade está vazia, preencha por favor!";
            $erro = true;
        }

        if (!$erro) {
            
            $usuario = new Usuario(
                0,
                "Ativo",
                "",
                $_POST["datanasc"],
                $_POST["email"],
                $_POST["senha"],
                $_POST["tipo"],
                $_POST["cpf"],
                $_POST["nome"]
            );
    
            $UsuarioDAO = new UsuarioDAO();
            $idusuario = $UsuarioDAO->inserir($usuario);
    
            $telefone = new Telefone(
                0,
                $_POST['telefone'],
                $_POST['ddd'],
                $idusuario
            );
    
            $TelefoneDAO = new TelefoneDAO();
            $TelefoneDAO->inserir($telefone);
    
            $endereco = new Endereco(
                0,
                $_POST['numerocasa'],
                $_POST['bairro'],
                $_POST['uf'],
                $_POST['cidade'],
                $_POST['cep'],
                $_POST['complemento'],
                $_POST['logradouro'],
                $idusuario
            );
    
            $EnderecoDAO = new EnderecoDAO();
            $EnderecoDAO->inserir($endereco);
    
            header("location:listar_usuarios.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
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
                        <h1 class="card-title text-center">Cadastro de Usuário</h1>

                        <form action="#" method="POST">
                            
                            <br><br>
                            <h4>Dados Pessoais</h4>
                            <br>

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : '' ?>">
                                <div><?php echo $msgerro[0]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o e-mail" required>
                                <div><?php echo $msgerro[1]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a senha" required>
                                <div><?php echo $msgerro[2]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF" required>
                                <div><?php echo $msgerro[3]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="datanasc" class="form-label">Data de Nascimento</label>
                                <input type="date" name="datanasc" class="form-control" id="datanasc" required>
                                <div><?php echo $msgerro[4]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo de Usuário</label>
                                <select id="tipo" name="tipo" class="form-select" required>
                                    <option value="0">Escolha o tipo de usuário.</option>
                                    <option value="Usuário">Usuário</option>
                                    <option value="Administrador">Administrador</option>
                                </select>
                                <div><?php echo $msgerro[5]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="ddd" class="form-label">DDD</label>
                                <select name="ddd" id="ddd" class="form-select" required>
                                    <option value="">Selecione o DDD</option>
                                    <option value="11">11 - São Paulo</option>
                                    <option value="12">12 - São Paulo</option>
                                    <option value="13">13 - São Paulo</option>
                                    <option value="14">14 - São Paulo</option>
                                    <option value="15">15 - São Paulo</option>
                                    <option value="16">16 - São Paulo</option>
                                    <option value="17">17 - São Paulo</option>
                                    <option value="18">18 - São Paulo</option>
                                    <option value="19">19 - São Paulo</option>
                                    <option value="21">21 - Rio de Janeiro</option>
                                    <option value="22">22 - Rio de Janeiro</option>
                                    <option value="24">24 - Rio de Janeiro</option>
                                    <option value="27">27 - Espírito Santo</option>
                                    <option value="28">28 - Espírito Santo</option>
                                    <option value="31">31 - Minas Gerais</option>
                                    <option value="32">32 - Minas Gerais</option>
                                    <option value="33">33 - Minas Gerais</option>
                                    <option value="34">34 - Minas Gerais</option>
                                    <option value="35">35 - Minas Gerais</option>
                                    <option value="37">37 - Minas Gerais</option>
                                    <option value="38">38 - Minas Gerais</option>
                                    <option value="41">41 - Paraná</option>
                                    <option value="42">42 - Paraná</option>
                                    <option value="43">43 - Paraná</option>
                                    <option value="44">44 - Paraná</option>
                                    <option value="45">45 - Paraná</option>
                                    <option value="46">46 - Paraná</option>
                                    <option value="47">47 - Santa Catarina</option>
                                    <option value="48">48 - Santa Catarina</option>
                                    <option value="49">49 - Santa Catarina</option>
                                    <option value="51">51 - Rio Grande do Sul</option>
                                    <option value="53">53 - Rio Grande do Sul</option>
                                    <option value="54">54 - Rio Grande do Sul</option>
                                    <option value="55">55 - Rio Grande do Sul</option>
                                    <option value="61">61 - Distrito Federal</option>
                                    <option value="62">62 - Goiás</option>
                                    <option value="63">63 - Tocantins</option>
                                    <option value="64">64 - Goiás</option>
                                    <option value="65">65 - Mato Grosso</option>
                                    <option value="66">66 - Mato Grosso</option>
                                    <option value="67">67 - Mato Grosso do Sul</option>
                                    <option value="68">68 - Acre</option>
                                    <option value="69">69 - Rondônia</option>
                                    <option value="71">71 - Bahia</option>
                                    <option value="73">73 - Bahia</option>
                                    <option value="74">74 - Bahia</option>
                                    <option value="75">75 - Bahia</option>
                                    <option value="77">77 - Bahia</option>
                                    <option value="79">79 - Sergipe</option>
                                    <option value="81">81 - Pernambuco</option>
                                    <option value="82">82 - Alagoas</option>
                                    <option value="83">83 - Paraíba</option>
                                    <option value="84">84 - Rio Grande do Norte</option>
                                    <option value="85">85 - Ceará</option>
                                    <option value="86">86 - Piauí</option>
                                    <option value="87">87 - Pernambuco</option>
                                    <option value="88">88 - Ceará</option>
                                    <option value="89">89 - Piauí</option>
                                    <option value="91">91 - Pará</option>
                                    <option value="92">92 - Amazonas</option>
                                    <option value="93">93 - Pará</option>
                                    <option value="94">94 - Pará</option>
                                    <option value="95">95 - Roraima</option>
                                    <option value="96">96 - Amapá</option>
                                    <option value="97">97 - Amazonas</option>
                                    <option value="98">98 - Maranhão</option>
                                    <option value="99">99 - Maranhão</option>
                                </select>
                                <div><?php echo $msgerro[6]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone (Sem DDD)</label>
                                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone" required>
                                <div><?php echo $msgerro[7]; ?></div>
                            </div>

                            <br><br>
                            <h4>Endereço</h4>
                            <br>

                            <div class="mb-3">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Digite o logradouro" required>
                                <div><?php echo $msgerro[8]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="numerocasa" class="form-label">Número da Casa</label>
                                <input type="number" name="numerocasa" class="form-control" id="numerocasa" placeholder="Digite o número da casa" required>
                                <div><?php echo $msgerro[9]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Digite o bairro" required>
                                <div><?php echo $msgerro[10]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="number" name="cep" class="form-control" id="cep" placeholder="Digite o CEP" required>
                                <div><?php echo $msgerro[11]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento (Opcional)</label>
                                <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Digite o complemento">
                            </div>

                            <div class="mb-3">
                                <label for="uf" class="form-label">UF</label>
                                <select name="uf" id="uf" class="form-select" required>
                                    <option value="">Selecione o estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <div><?php echo $msgerro[12]; ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite a cidade" required>
                                <div><?php echo $msgerro[13]; ?></div>
                            </div>
                            
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Cadastrar Usuário</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>