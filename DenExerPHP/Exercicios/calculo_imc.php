<!-- Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculo_imc.php" method="GET">
        <input type="text" name="altura" type="submit" placeholder="Digite sua altura"> <br> <br>
        <input type="text" name="peso" type="submit" placeholder="Digite seu peso"> <br> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

$altura_user = $_GET["altura"];

$valorFloat = str_replace(',', '.', $altura_user);

$valor_altura = (float) $valorFloat;

$peso_user = $_GET["peso"];

if(($valor_altura) && is_numeric($peso_user)) {
    $calculo_imc = $peso_user / (pow($valor_altura, 2));

    echo "<br>";
    echo "O índice de sua massa corporal: " . $calculo_imc;
} else {
    echo "<br>";
    echo "Inválido. Digite valores numéricos!";
}

?>