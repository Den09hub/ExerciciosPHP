<?php

// echo "<h1> Pagina Home </h1>";

// $x = 44;
// $y = 55;

// $res = $x * $y;

// echo "O resultado é: ".$res;

// $usuario = 10000;

// $conversao = $usuario / 6.12;

// if($conversao>= 1000){
//     echo "Você tem: ".$conversao;
//     echo "<br>";
//     echo "Tá suave";
// }else{
//     echo "Você tem: ".$conversao;
//     echo "<br>";
//     echo "Menos que R$1000";
// }
// 

// $x = 1;
// while($x <= 100){
//     echo $x;
//     echo "<br>";
//     $x = $x + 1;
// }

// for($x = 0; $x <= 100; $x++){
//     echo $x;
//     echo "<br>";
// }

$vetor = ["Maça", "Banana", "Pera", "Uva", "Mamão"];

// echo sizeof($vetor)

// $x = 0;
// while ($x < sizeof($vetor)){
//     echo $vetor[$x] . "<br>";
//     $x++;
// }

foreach($vetor as $item){
    echo $item;
    echo "<br>";
}


?>
