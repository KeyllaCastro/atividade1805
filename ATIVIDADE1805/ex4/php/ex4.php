<?php
//Faça um Programa que verifique se uma letra digitada é vogal ou consoante

$letra = $_POST["letra"];

if($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
    echo "A letra $letra é Vogal ";
} else {
    echo "A letra $letra é Consoante ";
}
    
?>