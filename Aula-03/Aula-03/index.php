<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8FJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="logica.js"></script>
    <title>Cadastro Funcionário</title>
</head>
<body>
    <div class="form">
        <h2>Cadastro de Funcionário</h2>
        <form action="user.php" method="post">
            <div class="container">
                <label for="nome"><b>Nome</b></label><br>
                <input type="text" placeholder="Nome do Funcionário" name="nome" required class="inputValue"><br>

                <label for="endereco"><b>Endereço</b></label><br>
                <input type="text" placeholder="Endereço" name="endereco" required class="inputValue"><br>

                <label for="fone"><b>Fone</b></label><br>
                <input type="text" placeholder="Fone" name="fone" required class="inputValue"><br>

                <label for="cpf"><b>CPF</b></label><br>
                <input type="text" placeholder="CPF" name="cpf" required class="inputValue"><br>

                <label for="rg"><b>RG</b></label><br>
                <input type="rg" placeholder="RG" name="rg" class="inputValue"><br>

                <label for="date"><b>Data de Nascimento</b></label><br>
                <input type="date" placeholder="Date" name="date" class="inputValue"><br>

                <label for="psw2"><b>Email</b></label><br>
                <input type="email" placeholder="Email" name="email" class="inputValue"><br><br>

                <input type="submit" name="create" value="Criar" class="inputSubmit">
                <input type="submit" name="read" value="Ler" class="inputSubmit">
                <input type="submit" name="update" value="Atualizar" class="inputSubmit">
                <input type="submit" name="delete" value="Deletar" class="inputSubmit">
            </div>
        </form>
    </div>
    <div class="container">
        <div class="display-4">
            <div class="row">
                <h2>List de Funcionário <span class="badge badge-danger"></span></h2>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Fone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">CPF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'src/banco.php';
                    $pdo = Banco::conectar();
                    $sql = "select nome,email,fone from tb_user";
                    foreach($pdo -> query($sql) as $row){
                        echo '<tr>';
                        echo '<td>'. $row ['nome'].'</td>';
                        echo '<td>'. $row ['fone'].'</td>';
                        echo '<td>'. $row ['email'].'</td>';
                        echo '<td>'. $row ['cpf'].'</td>';
                        echo '</tr>';
                    }
                    Banco::desconectar();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>