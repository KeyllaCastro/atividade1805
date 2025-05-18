<?php
/*Faça um Programa que leia três números e mostre o maior e o menor deles.*/

$numI = $_POST["numI"];
$numII = $_POST["numII"];
$numIII = $_POST["numIII"];

if($numI <= $numII && $numI <= $numIII) {
    echo "O primeiro número: $numI é o menor<br>";
} else if ($numII <= $numI && $numII <= $numIII) {
    echo "O segundo número: $numII é o menor<br>";
}
else {
    echo"O terceiro número: $numIII é o menor<br>";
}

?>