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

for($i = 0; $i < count($clientes); $i++){
    echo "nome: " . $clientes[$i]["nome"] . "<br>";
    echo "idade: " . $clientes[$i]["idade"] . "<br>";
    echo "email: " . $clientes[$i]["email"] . "<br>";
    echo "telefone: " . $clientes[$i]["telefone"] . "<br>";
}

?>