<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conversao_calculo.php" method="GET">
        <input type="text" name="valor_m/s" type="submit" placeholder="Digite a quantidade de m/s"> <br> <br>
        <input type="submit" name="enviar" valur="Enviar">
    </form>
    
</body>
</html>

<?php

$valor = $_GET["valor_m/s"];

if(is_numeric($valor)) {
    $conversao = $valor * 3.6;
    
    echo "<br>";
    echo "A conversão de m/s para km/h: " . $conversao . "km/h";
} else{
    echo "<br>";
    echo "Inválido. Digite um valor numérico.";
}

?>