<?php
if(isset($_GET["enviar"])){
    $palavra = strrev($_GET["nomecompleto"]);
    $tamanhho = strlen($palavra);
    $resultado = "";

    for($x=0;$x<$tamanhho;$x++){
        $resultado .= "<br>" .substr($palavra,0,$x+1);
    }
}else{
    $resultado = "Nenhum resultado disponível!";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <main>
        <header>TOPO</header>
        <section>
            <div>
                <p>Utilize o formulário abaixo para gerar o resultado:
                </p>
                <form action="index.php" method="get">
                    <label for="nomecompleto">
                        <input type="text" name="nomecompleto" placeholder="Informe o nome">

                        <input type="submit" name="enviar" value="Gerar">
                </form>
                <div id="resultado">
                    <?php
                        echo $resultado; 
                    ?>
                </div>
            </div>
        </section>
        <footer>RODAPÉ</footer>
    </main>
</body>

</html>