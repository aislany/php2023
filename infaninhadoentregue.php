<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texte lógica no php</title>
</head>
<body>
<form action="" method="get">
    If com or valor1 para testar:<input type="number" name="number1"/><br />
    If com or  2 para testar<input type="number" name="number2"/><br />
    <input type="submit" name="submit"value="Calcular" />
</form>
<?php
if (isset($_GET["number1"]) and (isset($_GET["number2"]))) {
    $numero1 = $_GET["number1"];
    $numero2 = $_GET["number2"];
    if ($numero1>10){
    if ($numero2<5){
    echo 'passa nessa parter quando o numero 1 é maior que o numero 10, e o numero 2 é qundo é menro que 10';
    } else {
     echo 'assa nessa parter quando o numero 1 é maior que o numero 10, e o numero 2 é qundo é menro que 10';
    }
    } else
    if ($numero2<5){
    echo 'passa nessa parter quando o numero 3 é maior que o numero 10, e o numero 2 é qundo é menro que 10';
    } else {
    echo 'passa nessa parter quando o numero 1 é maior que o numero 10, e o numero 3 é qundo é menro que 10';
    }
    }
    ?>
    </body>
</html>