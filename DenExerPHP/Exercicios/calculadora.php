<?php

function Soma($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}

function Subtracao($num1, $num2){
    $total = $num1 - $num2;
    return $total;
}

function Multiplicacao($num1, $num2){
    $total = $num1 * $num2;
    return $total; 
}

function Divisao($num1, $num2){
    $total = $num1 / $num2;
    return $total;
}

$res = Soma(10, 20);

$res2 = Subtracao(50, 10);

$res3 = Multiplicacao(10, 10);

$res4 = Divisao(10, 10);

echo "A soma dos números é " . $res . "<br>";
echo "A subtração dos números é " . $res2 . "<br>";
echo "A multiplicação dos números é " . $res3 . "<br>";
echo "A divisão dos números é " . $res4 . "<br>";

?>