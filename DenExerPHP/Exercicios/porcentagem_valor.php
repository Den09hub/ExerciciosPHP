<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="porcentagem_valor.php" method="GET">
        <input type="text" name="valor" type="submit" placeholder="Digite o valor para ser efetuado o calculo"> <br> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

$valor_user = $_GET["valor"];

if (is_numeric($valor_user)) {
    $res_porcentagem = (15 * $valor_user) / 100;

    echo "<br>";
    echo "15% do valor " . $valor_user . ": " . $res_porcentagem;
} else {
    echo "<br>";
    echo "Inválido. O valor precisa ser numérico!!";
}

?>