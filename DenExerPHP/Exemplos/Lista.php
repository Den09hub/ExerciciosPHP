<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

while ($num) {
    for($i = 0; $i < 10; $i++){
        echo $num[$i] . "<br>";
    }
    if($num == 10){
        echo "Válido";
    }else{
        echo "Inválido";
    }
}

?>