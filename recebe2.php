<?php
date_default_timezone_set('America/Sao_Paulo');
$nome           =$_POST["nome"];
$usuario        =$_POST["usuario"];
$senha          =$_POST["senha"];
$cargo          =$_POST["cargo"];
$administrador  =$_POST["administrador"];
$hora           = date('H');

echo "Nome: ".$nome."<br>";
echo "Usuario: ".$usuario."<br>";
echo "Senha: ".$senha."<br>";
echo "Cargo: ".$cargo."<br>";
echo "Administrador: ".$administrador."<br>";
echo "Hora: ".date('H'); 

if ($hora<12){
    $frase = " Bom Dia!";
    $fundo= "dia";
}else{
    if($hora<18){
     $frase = " Boa Tarde!";
     $fundo ="tarde";
}else{
    $frase = " Boa noite";
    $fundo = "noite";
    }
}
if($administrador=="S"){
    $user ="admin";
}else{
    $user ="user";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $fundo; ?>">
    <p>
        <img src="img/<?php echo $fundo; ?>.png" style="width 300px"><br>
        <?php echo $frase; ?> <strong><?php echo $nome; ?></strong>
        (<?php echo strtolower($usuario); ?>)
        <img src="img/<?php echo $user; ?>.png" style="widht:100px">
    </p>
    </body>
</html>


