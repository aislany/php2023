<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de dados </title>
</head>
<body>
    <h1> Jogo de Dados </h1>

<?php

$lado = rand ( 1,6);
 echo " <img src= 'imagens/Dados_". $lado.".jpg'>";

 ?>
 </body>
</html>

