<?php

$banco_dados = [
    [
        "id" => 1,
        "nome" => "Denyel",
        "idade" => 17,
        "fone" => "67 9999-9999",
        "cidade" => "Campo Grande",
    ],

    [
        "id" => 2,
        "nome" => "Devaneia",
        "idade" => 38,
        "fone" => "67 9999-9999",
        "cidade" => "Campo Grande",
    ],

    [
        "id" => 3,
        "nome" => "Luciano",
        "idade" => 49,
        "fone" => "67 9999-9999",
        "cidade" => "Campo Grande",
    ],

    [
        "id" => 4,
        "nome" => "Isabely",
        "idade" => 11,
        "fone" => "67 9999-9999",
        "cidade" => "Campo Grande",
    ]
    ];

for($r = 0; $r < sizeof($banco_dados); $r++){
    echo $banco_dados[$r]["id"] . "<br>";
}

// echo $banco_dados[1]["nome"];

?>