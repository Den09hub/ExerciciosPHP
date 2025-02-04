<!-- Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculo_media.php" method="GET">
        <input type="text" name="val1" type="submit" placeholder="Digite o primeiro valor"> <br> <br>
        <input type="text" name="val2" type="submit" placeholder="Digite o segundo valor"> <br> <br>
        <input type="text" name="val3" type="submit" placeholder="Digite o terceiro valor"> <br> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

$valor1 = $_GET["val1"];
$valor2 = $_GET["val2"];
$valor3 = $_GET["val3"];

if(is_numeric($valor1) && is_numeric($valor2) && is_numeric($valor3)) {
    $resultado_media = ($valor1 + $valor2 + $valor3) / 3;
    echo "<br>";
    echo "A média do aluno: " . $resultado_media;
} else {
    echo "Inválido. Digite valores numéricos!!";
}

?>