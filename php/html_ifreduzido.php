<?php
$logonormal = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$logoaniversario = "https://s3.amazonaws.com/images.seroundtable.com/googles-18th-birthday-logo-1474898702.gif";
$nascimento = "07-01";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML com If reduzido em PHP</title>
</head>
<body style="text-align:center;">
<!-- Restante da estrutura HTML -->
<img src="<?php echo (date("m-d") == $nascimento ? $logoaniversario : $logonormal); ?>" style="width:400px;"><br>
<input type="text" name="buscar" placeholder="O que deseja saber?">
<!-- Restante da estrutura HTML -->
</body>
</html>