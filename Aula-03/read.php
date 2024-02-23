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
                <h2>Lista de Funcionário<span class="badge badge-danger"></span></h2>
            </div>
        </div>
        <br>
        <a href="create.php"><button type="button" class="btn btn-success">Adicionar</button></a>
        <br>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Fone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ações</th>
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
                            echo '<td>
                            <a target="_self" href="update.php"><button type="button" class="btn btn-warning">Atualizar</button></a>
                            <a target="_self" href="delete.php"><button type"button" class="btn btn-danger">Excluir</button></a>
                            </td>';
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
        <div class="row">
            <a href="index.php"><button target="_self">Voltar</button></a>
            <!-- <form action="index.php">
                <input type="submit" name="voltar" value="Voltar">
            </form> -->
        </div>
    </div>
</body>

</html>