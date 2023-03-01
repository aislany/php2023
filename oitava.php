<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitava</title>
</head>
<body>

<?php
date_default_timezone_set (
'America/Sao_Paulo');

$hoje = date ("d/m/y");

$agora = date ("H:i");

$hora = date ("H");

if ($hora < 6 or $hora > 18 ) {


echo "<img src= 'download.jpg' height='50%' width= '50%'>";
  }else {
    echo "<img src= 'sol4.jpg' height='50%' width= '50%'>";
  }
    echo "Hoje é dia ". $hoje. " e agora são ".$agora. "hora";
    ?>
</body>
</html>
