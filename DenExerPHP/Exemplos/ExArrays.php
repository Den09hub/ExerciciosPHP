<?php

    $matriz = [
        [22, 23, 24, 25],
        [32, 33, 34, 35],
        [42, 43, 44, 45],
    ];


    // Imprimindo todos os números

    for( $i = 0; $i < count($matriz); $i++){

        for($x = 0; $x < 4; $i++){
            echo $matriz[$i][$x] . "<br>";
        }
    }
?>