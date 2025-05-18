<?php
//Faça um Programa que peça um número inteiro e determine se ele é par ou ímpar. Dica: utilize o operador módulo (resto da divisão)

$num = (int)$_POST['num'];

if($num % 2 == 0) {
    echo"O número  digitado: $num é par.";
} else {
    echo("O número  digitado: $num é ímpar.");
}
?>