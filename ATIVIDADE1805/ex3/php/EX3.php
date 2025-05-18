<?php
//Faça um Programa que verifique se uma letra digitada é "F" ou "M".
//Conforme a letra escrever: “F - Feminino”, ou “M - Masculino” ou Sexo Inválido

$letra = $_POST["letra"];

if($letra == "F") {
    echo "A F - Feminino ";
} else if($letra == "M") {
    echo "A M - Masculino ";
} else {
    echo " Sexo inválido ";
}
?>