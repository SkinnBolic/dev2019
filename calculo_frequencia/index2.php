<form action="index2.php" method="get">
    <input type="text" required name="palavra" placeholder="Informe uma palavra">
    <input type="text" required name="qtd" placeholder="Informe a quantidade">
    <input type="submit" value="Calcular">
</form>

<?php
    if(isset($_GET["palavra"]) and isset($_GET["qtd"])){
        $palavra = $_GET["palavra"];
        $qtd     = $_GET["qtd"];
        $frase   = $palavra;
        $novafrase= $
        for($x=0;$x<$qtd;$x++){
            echo $frase;
            echo "<br>";
            $frase = $frase." ".$palavra;

        }
    }else{
        echo "Informe os Campos";
    }
?>