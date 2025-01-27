<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculando_valores.php" method="GET">
        <h3>Digite o primeiro valor: </h3>
        <input type="text" name="valor_1" type="submit" placeholder="Primeiro valor"> <br>
        <h3>Digite o segunfo valor: </h3>
        <input type="text" name="valor_2" type="submit" placeholder="Segundo valor"> <br> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

$numero_primeiro = $_GET["valor_1"];

$numero_segundo = $_GET["valor_2"];

if (is_numeric($numero_primeiro) && is_numeric($numero_segundo)) {
    $resultado_soma = $numero_primeiro + $numero_segundo;
    $resultado_multiplicacao = $resultado_soma * $numero_primeiro;

    echo "<br>";
    echo "Primeiro número: " . $numero_primeiro . "<br>";
    echo "Segundo número: " . $numero_segundo . "<br>" . "<br>";

    echo "Efetuação dos calculos com os números proposto: " . "<br>";
    echo "Soma do números: " . $resultado_soma . "<br>";
    echo "Multiplicação com o primeiro valor e o resulatdo da soma: " . $resultado_multiplicacao;
} else {
    echo "<br>";
    echo "Inválido. O valor precisa ser numérico.";
}

?>