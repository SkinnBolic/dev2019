<?php
//Switch - Estrutura condicional

$sexo = 3;

switch ($sexo) {
    case 1:
        $frase = "Você é homem";
        $genero = "Masculino";
        $pontos = $sexo + 10;
        break;
    case 2:
        $frase = "Você é mulher";
        $genero = "Feminino";
        $pontos = $sexo + 20;
        break;
    case 3:
        $frase = "Você tem uma opção sexual independente";
        $genero = "Livre";
        $pontos = $sexo + 30;
        break;
}

echo $frase." | ".$genero;
echo "<br>".$pontos;

?>