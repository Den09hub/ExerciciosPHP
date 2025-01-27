<?php

// $nome = "Denyel";
// $sobrenome = "Rodrigues";

// $salario = 18000.50;

// $hobies = ["Jogar", "Ler", "Caminhar"];

// echo $nome . " Nicolas dos Santos " . $sobrenome;

// echo " ganha R$ " . $salario;

// echo "<br>";

// echo "<br>" . gettype($hobies);

$dados = array(
    "nome" => "Denyel",
    "idade" => 17,
    "fone" => 222,
    "cidade" => "Campo Grande"
);

echo $dados["nome"] . "<br>";
echo $dados["cidade"] . "<br>";
echo "Idade: " .$dados["idade"] . "<br>";
echo "CEL: " .$dados["fone"] . "<br>";

?>