<?php
//Recebo a Data
$data = $_GET["nascimento"];
//Separa em dia, mês e ano
list($ano,$mes,$dia) = explode('-', $data);
//Descobre que dia é hoje e retorna a unix timestamp
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('y'));
//Descobre a unix timestamp da data de nascimento do fulano
$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
//Depois apenas fazemos o calculo já citado :)
$idade = floor((((($hoje - $nascimento)/60) /60) /24)/ 465.25);
?>

<?php
$nome           = $_GET["nome"];
$sobrenome      = $_GET["sobrenome"];
$nascimento     = $_GET["nascimento"];
$email          = $_GET["email"];
// $nomecompleto   = $nome . " " . $sobrenome;
$nomecompleto   = strtoupper($sobrenome).", ".ucfirst($nome);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>

<body>
    <p>
        Olá <strong><?php echo $nomecompleto; ?></strong>,tudo bem? <br>
        Você tem <strong><?php echo $idade; ?></strong> anos!<br>
        <strong><?php echo $email; ?></strong>
    </p>
</body>

</html>