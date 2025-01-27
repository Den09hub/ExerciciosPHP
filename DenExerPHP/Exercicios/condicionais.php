<?php

$clientes = [[
    "nome" => "Denyel",
    "idade" => 17,
    "email" => "denyel@gmail.com",
    "telefone" => "67 9999-9999",
],
[
    "nome" => "Devaneia",
    "idade" => 38,
    "email" => "devaneia@gmail.com",
    "telefone" => "67 9999-9999",
],
[
    "nome" => "Luciano",
    "idade" => 49,
    "email" => "luciano@gmail.com",
    "telefone" => "67 9999-9999",
],
[
    "nome" => "Isabely",
    "idade" => 11,
    "email" => "isabely@gmail.com",
    "telefone" => "67 9999-9999",
]];

for($c = 0; $c < count($clientes); $c++){
    if($clientes[$c]["idade"] >= 25) {
        echo "Clientes senhores(as)." . "<br>";
        echo "nome: " . $clientes[$c]["nome"] . "<br>";
        echo "idade: " . $clientes[$c]["idade"] . "<br>";
        echo "email: " . $clientes[$c]["email"] . "<br>";
        echo "telefone: " . $clientes[$c]["telefone"] . "<br>" . "<br>";
    } else {
        echo "Clientes jovens." . "<br>";
        echo "nome: " . $clientes[$c]["nome"] . "<br>";
        echo "idade: " . $clientes[$c]["idade"] . "<br>";
        echo "email: " . $clientes[$c]["email"] . "<br>";
        echo "telefone: " . $clientes[$c]["telefone"] . "<br>" . "<br>";
    }
}

?>