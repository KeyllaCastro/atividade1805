<?php
//Faça um Programa que peça dois números e imprima o maior deles


$numI = $_POST["numI"];
$numII = $_POST["numII"];

if($numI >= $numII) {
    echo "O número maior é o $numI <br>";
} else {
    echo "O número maior é o $numII";
}

?>