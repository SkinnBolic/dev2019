<?php
$marmitao = array(
    array("salada" => "Beterraba", "proteina" => "Carne de Panela", "carboidrato" => "Arroz Branco"), 
    array("salada" => "Cenoura", "proteina" => "Frango", "carboidrato" => "Batata Soutê"),
);

echo "ALMOÇO:<br>";
echo "Salada:".$marmitao[0]["salada"]."<br>";
echo "Proteína:".$marmitao[0]["proteina"]."<br>";
echo "Carboidrato:".$marmitao[0]["carboidrato"]."<br>";
echo "=====================<br>";
echo "JANTA:<br>";
echo "Salada:".$marmitao[1]["salada"]."<br>";
echo "Proteína:".$marmitao[1]["proteina"]."<br>";
echo "Carboidrato:".$marmitao[1]["carboidrato"]."<br>";
?>