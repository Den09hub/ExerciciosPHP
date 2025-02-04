<!-- Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
Para saber o valor do pi, use: M_PI (ele armazena o valor de pi) -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="valor_pi.php" method="GET">
        <input type="text" name="raio" type="submit">
    </form>
</body>
</html>

<?php

$raio_circulo = $_GET["raio"];

if(is_numeric($raio_circulo)){
    echo "Raio: " . $raio_circulo . "<br>";
    echo "Perímetro (circuferência): " . 2*M_PI*$raio_circulo . "<br>";
    echo "Área do círculo: " . M_PI*pow($raio_circulo, 2);
} else{
    echo "Inválido. O valor dado não é um número.";
}

?>