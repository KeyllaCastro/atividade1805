<?php
//6. Faça um Programa que leia três números e mostre o maior deles.

$numI = $_POST["numI"];
$numII = $_POST["numII"];
$numIII = $_POST["numIII"];

if($numI >= $numII && $numI >= $numIII) {
    echo "O primeiro número: $numI é o maior<br>";
} else if ($numII >= $numI && $numII >= $numIII) {
    echo "O segundo número: $numII é o maior<br>";
}
else {
    echo"O terceiro número: $numIII é o maior<br>";
}

?>