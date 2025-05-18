<?php
//Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.

$numI = $_POST["numI"];

if($numI >0) {
    echo "O número $numI é positivo";
} else {
    echo "O número $numI é negativo";
}

?>