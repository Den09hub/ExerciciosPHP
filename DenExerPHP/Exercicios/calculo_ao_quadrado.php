<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculo_ao_quadrado.php" method="GET">
        <input type="text" name="num1" type="submit" placeholder="Digite o primeiro valor"> <br>
        <input type="text" name="num2" type="submit" placeholder="Digite o segundo valor"> <br>
        <input type="submit" name="enviar" value="Enviar"> <br>

    </form>
    
</body>
</html>

<?php

$numero_one = $_GET["num1"];

$numero_two = $_GET["num2"];

if(is_numeric($numero_one) && is_numeric($numero_two)) {
    $numero_one = pow($numero_one, 2); 
    $numero_two = pow($numero_two, 2);
    $res_quadrados = $numero_one + $numero_two;

    echo "<br>";
    echo "O resultado dos números: " . $res_quadrados;
}

?>