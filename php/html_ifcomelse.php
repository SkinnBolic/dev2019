<?php
//If simples
if(isset($_GET["submit"])){
    //If com else
    if($_GET["idade"]=="mais"){
        header("Location: https://www.uol.com.br/");
    }else{
        header("Location: https://g1.globo.com/");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com If e Else em PHP</title>
</head>
<body>
<!-- Restante da estrutura HTML -->

<div id="formulario">
    <h1>VOCÊ TEM MAIS DE 18 ANOS?</h1>
    <form>
        <input type="radio" name="idade" value="mais">Sim
        <input type="radio" name="idade" value="menos">Não<br>
        <input type="submit" name="submit" value="Entrar">
    </form>
</div>

<!-- Restante da estrutura HTML -->
</body>
</html>