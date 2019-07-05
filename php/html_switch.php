<?php
//If simples
if(isset($_POST["submit"])){
    $servidor = $_POST["servidor"];
    switch ($servidor) {
        case 1:
            $a1 = array("tipo" => "a1.medium","hora1" => "$0.012 por hora","hora6" => "$0.016 por hora");
            $a2 = array("tipo" => "a1.large","hora1" => "$0.025 por hora","hora6" => "$0.031 por hora");
            $a3 = array("tipo" => "a1.xlarge","hora1" => "$0.051 por hora","hora6" => "$0.065 por hora");
            $a4 = array("tipo" => "a1.2xlarge","hora1" => "$0.102 por hora","hora6" => "$0.140 por hora");
            break;
        case 2:
            $a1 = array("tipo" => "a1.medium","hora1" => "$0.014 por hora","hora6" => "$0.018 por hora");
            $a2 = array("tipo" => "a1.large","hora1" => "$0.027 por hora","hora6" => "$0.038 por hora");
            $a3 = array("tipo" => "a1.xlarge","hora1" => "$0.057 por hora","hora6" => "$0.068 por hora");
            $a4 = array("tipo" => "a1.2xlarge","hora1" => "$0.112 por hora","hora6" => "$0.145 por hora");
            break;
        case 3:
            $a1 = array("tipo" => "a1.medium","hora1" => "$0.013 por hora","hora6" => "$0.019 por hora");
            $a2 = array("tipo" => "a1.large","hora1" => "$0.029 por hora","hora6" => "$0.042 por hora");
            $a3 = array("tipo" => "a1.xlarge","hora1" => "$0.055 por hora","hora6" => "$0.071 por hora");
            $a4 = array("tipo" => "a1.2xlarge","hora1" => "$0.108 por hora","hora6" => "$0.218 por hora");
            break;
    }
    //https://aws.amazon.com/pt/ec2/spot/pricing/
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com Switch em PHP</title>
</head>
<body>
<!-- Restante da estrutura HTML -->

<div id="formulario">
    <form action="html_switch.php" method="post">
        <label for="servidor">Selecione um servidor</label>
        <select name="servidor">
            <option value="1">Leste dos EUA (Norte da Virgínia)</option>
            <option value="2">Leste dos EUA (Ohio)</option>
            <option value="3">Oeste dos EUA (Norte da Califórnia)</option>
        </select>
        <input type="submit" name="submit" value="Ver preços">
    </form>
</div>

<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
        <h1>Tabela de Preços</h1>
        <table border="1">
            <tr>
                <th>Tipo</th>
                <th>1 Hora</th>
                <th>6 Horas</th>
            </tr>
            <tr>
                <td><?php echo $a1["tipo"]; ?></td>
                <td><?php echo $a1["hora1"]; ?></td>
                <td><?php echo $a1["hora6"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $a2["tipo"]; ?></td>
                <td><?php echo $a2["hora1"]; ?></td>
                <td><?php echo $a2["hora6"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $a3["tipo"]; ?></td>
                <td><?php echo $a3["hora1"]; ?></td>
                <td><?php echo $a3["hora6"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $a4["tipo"]; ?></td>
                <td><?php echo $a4["hora1"]; ?></td>
                <td><?php echo $a4["hora6"]; ?></td>
            </tr>
        </table>
    </div>
<?php
}
?>

<!-- Restante da estrutura HTML -->
</body>
</html>