
<?php
//If simples
if(isset($_POST["submit"])){
    $valor      = $_POST["valor"];
    $parcelas   = $_POST["parcelas"];
    //If com elseif
    if($parcelas==12){
        $juros = 0.10;
    }elseif($parcelas==24){
        $juros = 0.13;
    }else{
        $juros = 0.15;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com For em PHP</title>
</head>
<body>
<!-- Restante da estrutura HTML -->
<div id="formulario">
    <form method="post">
        <label for="valor">Valor Solicitado</label>
        <input type="text" name="valor" placeholder="Informe o valor"><br>
        <label for="parcelas">Parcelado em</label>
        <select name="parcelas">
            <option value="12">12 Parcelas</option>
            <option value="24">24 Parcelas</option>
            <option value="36">36 Parcelas</option>
        </select><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</div>

<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
        <h1>O resultado do seu financiamento é de:</h1>
        <h3>Valor: <?php echo $valor; ?> a ser pago em <?php echo $parcelas; ?> parcelas.</h3>
        <?php
        $jurosTotal     = $valor * $juros * $parcelas;
        $montante       = $jurosTotal + $valor;
        $valorParcela   = $montante/$parcelas;
        ?>
        <table border="1">
            <tr>
                <th>Parcela</th>
                <th>Valor</th>
                <th>Pagamento</th>
            </tr>
            <?php
            for($x=1;$x<($parcelas+1);$x++){
            ?>
                <tr>
                    <td><?php echo $x; ?>ª parcela</td>
                    <td><?php echo $valorParcela; ?></td>
                    <td><?php echo date('d/m/Y', mktime(0, 0, 0, date('m')+$x, 1, date('Y'))); ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <h3>Valor final: <?php echo $montante; ?></h3>
        <h4>Primeira parcela: <?php echo date('d/m/Y', mktime(0, 0, 0, date('m')+12, 1, date('Y'))); ?></h4>
    </div>
<?php
}
?>

<!-- Restante da estrutura HTML -->
</body>
</html>