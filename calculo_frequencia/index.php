<?php
//Verificando se foi enviado um formulário
if(isset($_GET["enviar"])){

    //Recebendo os campos do formulário e guardando nas variáveis(potes)
    $txtnome          = $_GET["txt-nome"];
    $txtcurso         = $_GET["txt-curso"];
    $txtcargahoraria  = $_GET["txt-carga-horaria"];
    $txtcargadia      = $_GET["txt-carga-dia"];
    $txtfrequencia    = $_GET["txt-frequencia"];

    $diastotaisdocurso = $txtcargahoraria/$txtcargadia;
    $qtddefaltasemdias = $diastotaisdocurso*((100-$txtfrequencia)/100);

    $frase  = "Olá ".$txtnome.", Bem Vindis ao curso ".$txtcurso.", a carga horária total deste curso ";
    $frase .="é de ".$txtcargahoraria." horas. A carga horária por dia é de ".$txtcargadia." horas, o que ";
    $frase .="equivale a ".$diastotaisdocurso." dias de curso no total. A frequência obrigatória ";
    $frase .="é de ".$txtfrequencia."%, ou seja, você poderá faltar no total ".$qtddefaltasemdias." dias.";
}else{
    //Frase no caso do formulário ainda não ter sido preenchido
    $frase = "Informe os dados no formulário acima.";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculos Escolares </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header -->
    <?php
    include('views/header.php');
    ?>

    <section>
        <div class="container">
            <h1>Cálculo de Frequência</h1>
            <form action="" id="formulario"method="GET">

                <label for="">Nome Completo</label>
                <input type="text" id="txt-nome" name="txt-nome" size="100" placeholder="Digite seu nome completo.">

                <label for="">Nome do Curso</label>
                <input type="text" id="txt-curso" name="txt-curso" size="60" placeholder="Digite o nome do curso.">

                <label for="">Carga Horária do Curso</label>
                <input type="text" id="txt-carga-horaria" name="txt-carga-horaria" size="40" placeholder="Digite a carga horária.">

                
                <label for="">Carga Horária Diária</label>
                <input type="text" id="txt-carga-dia" name="txt-carga-dia" size="40" placeholder="Digite o valor de horas diárias.">


                <label for="">Frequência Obrigatória</label>
                <input type="text" id="txt-frequencia" name="txt-frequencia" size="40" placeholder="Digite o valor em porcentágem sem o simbulo (%).">

                <br><input type="submit" name="enviar" value="Calcular">

                <br><br>
                <span class="resultado">
                    <?php echo $frase; ?>
                </span>


            </form>

            <?php
                if(isset($_GET["txt-carga-horaria"]))
                {
                        // Fazer os calculos
                }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include('views/footer.php')
    ?>

</body>

</html>