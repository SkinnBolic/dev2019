    <?php
date_default_timezone_get('America/Sao_Paulo');
$nome           =$_POST["nome"];
$usuario        =$_POST["usuario"];
$senha          =$_POST["senha"];
$cargo          =$_POST["cargo"];
$administrador  =$_POST["administrador"];

echo "Nome: ".$nome."<br>";
echo "Usuario: ".$usuario."<br>";
echo "Senha: ".$senha."<br>";
echo "Cargo: ".$cargo."<br>";
echo "Administrador: ".$administrador."<br>";
echo "Hora: ".date('H'); 
if (date('H')<11){echo " Bom Dia!"; $fundo="dia";
} else {echo " Boa Tarde!"; $fundo="tarde";
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
</html>


