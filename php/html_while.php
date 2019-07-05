<?php
if(isset($_POST["submit"])){
    $categoria = $_POST["categoria"];
    switch ($categoria) {
        case 1:
            $produtos = array(
                            array("nome" => "Jaleco Lord", "valor" => 210, "ativo" => true), 
                            array("nome" => "Jaleco Veneto", "valor" => 240, "ativo" => false),
                        );
            break;
        case 2:
            $produtos = array(
                            array("nome" => "Jaleco Duquesa", "valor" => 210, "ativo" => true), 
                            array("nome" => "Jaleco Condessa", "valor" => 240, "ativo" => false),
                            array("nome" => "Jaleco Basic", "valor" => 190, "ativo" => true),
                        );
            break; 
        case 3:
            $produtos = array(
                            array("nome" => "Mini Jaleco Duquesa", "valor" => 210, "ativo" => true), 
                            array("nome" => "Mini Jaleco Condessa", "valor" => 240, "ativo" => false),
                            array("nome" => "Mini Jaleco Basic", "valor" => 190, "ativo" => true),
                            array("nome" => "Mini Jaleco Lord", "valor" => 210, "ativo" => true), 
                            array("nome" => "Mini Jaleco Veneto", "valor" => 240, "ativo" => false),
                        );
            break;
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com While em PHP</title>
</head>
<body>
<!-- Restante da estrutura HTML -->

<div id="formulario">
    <form action="html_while.php" method="post">
        <label for="categoria">Selecione uma categoria</label>
        <select name="categoria">
            <option value="1">Jaleco Masculino</option>
            <option value="2">Jaleco Feminino</option>
            <option value="3">Jaleco Infantil</option>
        </select>
        <input type="submit" name="submit" value="Ver preços">
    </form>
</div>

<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
        <?php
        $linha=0;
        while($linha < count($produtos)){
            echo "Nome: ".$produtos[$linha]["nome"]."<br>";
            $linha++;
        }
        ?>
    </div>
<?php
}
?>

<!-- Restante da estrutura HTML -->
</body>
</html>