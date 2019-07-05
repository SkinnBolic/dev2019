<?php
if(isset($_POST["submit"])){
    $pontos = $_POST["pontos"];
    $valor = "";
    
    if($pontos > 50){
    echo "Sem direito a recompensas";
    }elseif($pontos == 50 and $pontos >=100){
        echo " Descontos em produtos financeiros";
    }elseif($pontos < 100 and $pontos >=400){
        echo " Milhas em dobro para viagens";
    }elseif($pontos < 400 and $pontos >=700){
        echo " Pontos em dobro para compras em dólar";
    }elseif($pontos >=1000){
        echo " 5 vezes mais pontos nas compras em dólar";    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="formulario">
    <form method="post">
        <label for="valor">Valor de pontos</label>
        <input type="text" name="pontos" placeholder="Informe seus Pontos"><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</div>
<div id="resultado">
    <h3>Seu Premio é:</h3>
    
<?php
if(isset($_POST["submit"])){
    echo $pontos;
}
?>

</div>
</body>
</html>