<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="porcentagem_valores.php" method="GET">
        <input type="text" name="valor" type="submit" placeholder="Digite o valor"> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

$valor_user = $_GET["valor"];

if (is_numeric($valor_user)) {
    $calculo_porcentagem5 = (5 * $valor_user) / 100;
    $calculo_porcentagem50 = (50 * $valor_user) / 100;

    echo "<br>";
    echo "5% do valor " . $valor_user . ": " . $calculo_porcentagem5 . "<br>";
    echo "50% do valor " . $valor_user . ": " . $calculo_porcentagem50;
} else {
    echo "Inválido. O valor precisa ser numérico!!";
}

?>