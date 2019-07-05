<?php
if(isset($_POST["submit"])){
    $categoria = $_POST["categoria"];
    switch ($categoria) {
        case 1:
            $produtos = array(
                            array("nome" => "TV Globinho", "horario" => "10:00", "classificacao" => "livre"), 
                            array("nome" => "Sessão da Tarde", "horario" => "14:00", "classificacao" => "livre"), 
                            array("nome" => "Novela Chata", "horario" => "19:00", "classificacao" => "livre"),                            
                        );
            break;
        case 2:
            $produtos = array(
                           array("nome" => "TV Globinho", "horario" => "10:00", "classificacao" => "livre"), 
                           array("nome" => "Sessão da Tarde",  "horario" => "14:00", "classificacao" => "livre"), 
                           array("nome" => "Novela Chata",  "horario" => "19:00", "classificacao" => "livre"), 
                        );
            break;
        case 3:
            $produtos = array(
                           array("nome" => "TV Globinho", "horario" => "10:00", "classificacao" => "livre"), 
                           array("nome" => "Sessão da Tarde", "horario" => "14:00", "classificacao" => "livre"), 
                           array("nome" => "Novela Chata", "horario" => "19:00", "classificacao" => "livre"), 
                        );
            break;
            case 4:
            $produtos = array(
                           array("nome" => "TV Globinho", "horario" => "10:00", "classificacao" => "livre"), 
                           array("nome" => "Sessão da Tarde", "horario" => "14:00", "classificacao" => "livre"), 
                           array("nome" => "Novela Chata",  "horario" => "19:00", "classificacao" => "livre"), 
                        );
            break;
            case 5:
            $produtos = array(
                           array("nome" => "TV Globinho", "horario" => "10:00", "classificacao" => "livre"), 
                           array("nome" => "Sessão da Tarde", "horario" => "14:00", "classificacao" => "livre"), 
                           array("nome" => "Novela Chata", "horario" => "19:00", "classificacao" => "livre"), 
                        );
            break;
            case 6:
            $produtos = array(
                           array("nome" => "EPTV Cidade", "horario" => "12:00", "classificacao" => "livre"), 
                           array("nome" => "Esporte Espetacular", "horario" => "13:00", "classificacao" => "livre"), 
                           array("nome" => "Fim da Novela Chata", "horario" => "19:00", "classificacao" => "livre"), 
                        );
            break;
            case 7:
            $produtos = array(
                           array("nome" => "Globo Rural", "horario" => "08:00", "classificacao" => "livre"), 
                           array("nome" => "Auto Esporte", "horario" => "09:00", "classificacao" => "livre"), 
                           array("nome" => "Futebor", "horario" => "16:00", "classificacao" => "livre"), 
                        );
            break;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>exercicio-01.php</title>
</head>
<body>

<div id="formulario">
    <form action="exercicio-01.php" method="post">
        <label for="categoria">Selecione um dia da Semana</label>
        <select name="categoria">
            <option value="1">Segunda-feira</option>
            <option value="2">Terça-feira</option>
            <option value="3">Quarta-feira</option>
            <option value="4">Quinta-feira</option>
            <option value="5">Sexta-feira</option>
            <option value="6">Sabado</option>
            <option value="7">Domingo</option>
        </select>
        <input type="submit" name="submit" value="Pesquisar">
    </form>
</div>
<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
    <table border="1">
            <tr>
                <th>Horário</th>
                <th>Programa</th>
                <th>Classificação</th>
            </tr>
        <?php
        $linha=0;
        while($linha < count($produtos)){
        ?>
            <tr>
                    <td><?php echo $produtos[$linha]["horario"]; ?></td>
                    <td><?php echo $produtos[$linha]["nome"]; ?></td>
                    <td><?php echo $produtos[$linha]["classificacao"]; ?></td>
                </tr>
        <?php
        $linha++;
        }
        ?>
    </table>

    </div>
<?php
}
?>
</body>
</html>