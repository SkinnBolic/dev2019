<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>

<body>
    <h1>Preencher o Formulário<h1>
            <form id="contato" action="recebe.php" method="get">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Informe o nome"><br>


                <label for="nome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Informe o sobrenome"><br>

                <label for="nome">Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" placeholder="dd/mm/aaaa"><br>

                <label for="nome">E-mail</label>
                <input type="text" name="email" id="email" placeholder="Informe o E-mail"><br>
                <input type="submit" name="submit" id="submit" value="Ok">
            </form>
</body>

</html>