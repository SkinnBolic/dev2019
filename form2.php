<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form id="contato" action="recebe2.php" method="post"> 
        <label for="name">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe o seu Nome"><br>

        <label for="nome">Usuário</label>
        <input type="text" name="usuario" id="usuario" placeholder="Informe o Usuário"><br>

        <label for="nome">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Informe a Senha"><br>

        <label for="cargo">Cargo</label>
        <select id="cargo" name="cargo">
            <option value="1">Gerente</option>
            <option value="2">Auxiliar Administrativo</option>
            <option value="3">Secretário</option>
            <option value="4">Aprendiz</option>
        </select>
        <br>
        <label for="administrador">Administrador</label>
        <input type="radio" name="administrador" id="administrador" value="S">Sim
        <input type="radio" name="administrador" id="administrador" value="S">Não
        <br>
        <input type="submit" name="submit" id="submit" value="Cadastrar">
    </form>
</body>

</html>