<?php
//Verificando se foi enviado um formulário
if(isset($_GET["enviar"])){
    
    //Recebendo os campos do formulário e guardando nas variáveis (potes)
    $txtnome            = $_GET["txt-nome"];
    $txtcurso           = $_GET["txt-curso"];
    $txtcargahoraria    = $_GET["txt-carga-horaria"];
    $txtcargadia        = $_GET["txt-carga-dia"];
    $txtfrequencia      = $_GET["txt-frequencia"];

    //Criar novas variáveis para armazenar os resultados obtidos a partir
    //das informações do formulário
    $diastotaisdocurso = $txtcargahoraria/$txtcargadia;
    $qtddefaltasemdias = $diastotaisdocurso*((100-$txtfrequencia)/100);

    //Criar uma nova variável para guardar o resultado (frase) que será exibida
    $frase  = "Olá ".$txtnome.", bem-vindis ao curso ".$txtcurso.", a carga horária total deste curso ";
    $frase .= "é de ".$txtcargahoraria." horas. A carga horária por dia é de ".$txtcargadia." horas, o que ";
    $frase .= "equivale a ".$diastotaisdocurso." dias de curso no total. A frequência obrigatória ";
    $frase .= "é de ".$txtfrequencia."%, ou seja, você poderá faltar no total ".$qtddefaltasemdias." dias.";

}else{

    //Frase no caso do formulário ainda não ter sido preenchido
    $frase = "Informe os dados no formulário acima.";

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculos Escolares</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>

    <!-- header -->
    <?php 
        include('views/header.php');
    ?>

    <section>
        <div class="container">
            <h1>Cálculo de Frequência</h1>
            <form action="#" id="formulario" method="GET">
                <label for="">Nome Completo</label>
                <input type="text" id="txt-nome" name="txt-nome" size="100" placeholder="Digite seu nome completo">

                <label for="">Nome Curso</label>
                <input type="text" id="txt-curso" name="txt-curso" size="60">

                <label for="">Carga Horária do Curso</label>
                <input type="text" id="txt-carga-horaria" name="txt-carga-horaria" size="10" >

                <label for="">Carga Horária Diária</label>
                <input type="text" id="txt-carga-dia" name="txt-carga-dia" size="10">

                <label for="">Frequência Obrigatória</label>
                <input type="text" id="txt-frequencia" name="txt-frequencia" size="10" placeholder="Valor em %">
                
                <br>
                <input type="submit" name="enviar" value="Calcular">

                <br><br>
                <span class="resultado">
                    <?php echo $frase; ?>
                </span>

            </form>
        </div>
    </section>

    <!-- footer -->
    <?php 
        include('views/footer.php');
    ?>

</body>
</html>