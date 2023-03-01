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
   Fazer for até:<input type="number"
    name="number"/><br />
    <input type="submit" name="submit"
  value="Compararar" />
</form>
<?php
if (isset($_GET["number"])) {
    $qtdfors= $_GET["number"];
    for( $i = 1; $i <= $qtdfors; $i++){
        echo "o valor é ".$i. '<br /> ';
        if($i % 2 == 0) {
        echo "valor é par" .'<br />';}
        if($i % 2 == 1) {
        echo "o valor é impar" .'<br />' . PHP_EOL;
    }
    }
}
?>