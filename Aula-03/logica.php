<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dbBrazuna";
$message = "";


$create = filter_input(INPUT_POST, 'create', FILTER_SANITIZE_SPECIAL_CHARS);
$read = filter_input(INPUT_POST, 'read', FILTER_SANITIZE_SPECIAL_CHARS);
$update = filter_input(INPUT_POST, 'update', FILTER_SANITIZE_SPECIAL_CHARS);
$delete = filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_SPECIAL_CHARS);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

try {
    $conexao = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($create) {
        $dados = "insert into funcionario(nome_func, endereco_func, fone_func, cpf_func, rg_func, nascimento_func, email_func) values('$name', '$address', '$phone', '$cpf', '$rg', '$date','$email')";
        $grava_dados = $conexao->prepare($dados);
        if ($grava_dados->execute()) {
?> <script>
                alert("Dados gravados com sucesso!");
            </script>
        <?php
        } else {
        ?> <script>
                alert("Dados não gravados!");
            </script>
        <?php
        }
    }
    if ($read) {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Listagem Dados</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <div class="display-4">
                    <div class="row">
                        <h2>Lista de Funcionário <span class="badge badge-danger"></span></h2>
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
                            try {


                                include 'banco.php';
                                $pdo = Banco::conectar();
                                $sql = "select nome_func,fone_func, email_func, cpf_func from funcionario";
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['nome_func'] . '</td>';
                                    echo '<td>' . $row['fone_func'] . '</td>';
                                    echo '<td>' . $row['email_func'] . '</td>';
                                    echo '<td>' . $row['cpf_func'] . '</td>';
                                    echo '</tr>';
                                }
                                Banco::desconectar();
                            } catch (PDOException $ex) {
                                echo ($ex->getMessage());
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>

        </html>
<?php
    }
    //Lines aboves WIP
} catch (PDOException $error) {
    $message = $error->getMessage();
}
