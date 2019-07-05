<?php
//If simples
if(isset($_POST["submit"])){
    $pergunta1   = $_POST["pergunta1"];
    $pergunta2   = $_POST["pergunta2"];
    $diagnostico = "";

    //If com elseif
    if($pergunta1 ==1 and $pergunta2 == 1){
         $diagnostico ="AAA";
    }elseif($pergunta1 ==1 and $pergunta2 ==2){
        $diagnostico = "BBB";
    }elseif($pergunta1 ==1 and $pergunta2 ==3){
        $diagnostico = "CCC";
    }elseif($pergunta1 ==2 and $pergunta2 ==1){
        $diagnostico = "DDD";
    }elseif($pergunta1 ==2 and $pergunta2 ==2){
        $diagnostico = "EEE";
    }else{
        $diagnostico = "FFF";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>diagnostico</title>
</head>
<body>
    
<div id="formulario">
    <form action="exercicio-02.php" method="POST">
        <label for="pergunta1">Onde está o problema?</label><br>
        <select name="pergunta1">
            <option value="1">No sistema operacional</option>
            <option value="2">No hardware</option>
        </select><br><br>
        <label for="pergunta2">Com que frequência o problema acontece?</label><br>
        <select name="pergunta2">
            <option value="1">Todas as vezes que ligo</option>
            <option value="2">As vezes</option>
            <option value="3">Primeira vez que acontece</option>
        </select>
        <input type="submit" name="submit" value="Diagnosticar">
    </form>
</div>

<div id="resultado">
    <h3>O diagnostico é:</h3>
    <?php
    if(isset($_POST["submit"])){
        echo $diagnostico;

    }

    ?>
</div>


</body>
</html>