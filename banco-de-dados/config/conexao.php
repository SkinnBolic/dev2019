<?php

  try
  {  

  $host = 'localhost';  
  $banco = '';
  $usuario = 'root';
  $senha = '';

  $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
  
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
  
  echo "Uhul to conectado";
  }
  catch(PDOException $e)
  {
      echo "Opa!, Algo de errado não está certo.";
  }
?>
    