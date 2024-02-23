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

$cpf = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
$rg = preg_replace('/(\d{2})(\d{3})(\d{3})(\d{1})/', '$1-$2-$3/$4', $rg);
$phone = preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1)$2-$3', $phone);

try {
    $conexao = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($create) {
        $dados = "insert into funcionario(nome_func, endereco_func, fone_func, cpf_func, rg_func, nascimento_func, email_func) values('$name', '$address', '$phone', '$cpf', '$rg', '$date','$email')";
        $grava_dados = $conexao->prepare($dados);
        if ($grava_dados->execute()) {
?> <script>
                alert("Dados gravados com sucesso!");
                window.location.href = '/index.php';
            </script>
        <?php
        } else {
        ?> <script>
                alert("Dados não gravados!");
                window.location.href = '/read.php';
            </script>
<?php
        }
    }
    //Lines aboves WIP
} catch (PDOException $error) {
    $message = $error->getMessage();
}
