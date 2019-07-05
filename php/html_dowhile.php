
<?php
$itens      = 0;
$soma       = 0;
$qtditens   = 0;

$carrinho = array(
                array("produto" => "Banana", "valor" => 7.56, "qtd" => 1), 
                array("produto" => "Contra Filé", "valor" => 12.49, "qtd" => 1),
                array("produto" => "Maçã", "valor" => 6.78, "qtd" => 1),
                array("produto" => "Bolacha Bono de Doce de Leite", "valor" => 2.14, "qtd" => 4), 
                array("produto" => "Arroz - 5kg", "valor" => 11.75, "qtd" => 3),
                array("produto" => "Macarrão", "valor" => 2.65, "qtd" => 4),
                array("produto" => "Papel Higiênico", "valor" => 5.75, "qtd" => 16),
            );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com Do While em PHP</title>
</head>
<body>
<!-- Restante da estrutura HTML -->

<div id="resultado">
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Valor Unit.</th>
            <th>Qtd</th>
            <th>Sub Total</th>
        </tr>
        <?php
        do {
            $subtotal = ($carrinho[$itens]["qtd"]*$carrinho[$itens]["valor"]);
            ($carrinho[$itens]["qtd"]>1 ? $cor="#F00" : $cor="#000");
            echo "<tr style='color:".$cor."'>";
                echo "<td>".$carrinho[$itens]["produto"]."</td>";
                echo "<td>".$carrinho[$itens]["valor"]."</td>";
                echo "<td>".$carrinho[$itens]["qtd"]."</td>";
                echo "<td>".($subtotal)."</td>";
            echo "</tr>";
            $soma += $subtotal;
            $qtditens += $carrinho[$itens]["qtd"];
            $itens++;
        } while($itens< count($carrinho));
        ?>
        <tr>
            <th colspan="3">Total</th>
            <th><?php echo $soma;?></th>
        </tr>
        <tr>
            <th colspan="3">Qtd de Itens</th>
            <th><?php echo $qtditens;?></th>
        </tr>
    </table>
</div>

<!-- Restante da estrutura HTML -->
</body>
</html>