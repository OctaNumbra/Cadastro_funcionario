<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro Funcionário</title>
</head>
<body>
    <div class="form">
        <h2>Cadastro</h2>
        <form action="logica.php" method="post">
            <div class="container">
                <!-- WIP -->
                <!-- <label for="id"><b>ID Funcionário</b></label>
                <input type="text" placeholder="Apenas para pesquisa" name="id" class="inputValue"> -->

                <label for="nome"><b>Nome</b></label><br>
                <input type="text" placeholder="Nome do Funcionário" name="name" required class="inputValue"><br>

                <label for="endereco"><b>Endereço</b></label><br>
                <input type="text" placeholder="Endereço" name="address" required class="inputValue"><br>

                <label for="fone"><b>Fone</b></label><br>
                <input type="text" placeholder="Fone" name="phone" required class="inputValue"><br>

                <label for="cpf"><b>CPF</b></label><br>
                <input type="text" placeholder="CPF" name="cpf" required class="inputValue"><br>

                <label for="rg"><b>RG</b></label><br>
                <input type="text" placeholder="RG" name="rg" class="inputValue"><br>

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
</body>
</html>