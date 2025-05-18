<?php /*Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual
operação ele deseja realizar. O resultado da operação deve ser acompanhado de uma
frase que diga se o número é:
a) par ou ímpar;
b) positivo ou negativo;
c) inteiro ou decimal.*/

$num1 = (float)$_POST['num1'];
$num2 = (float)$_POST['num2'];
$ope = (float)$_POST['ope'];

if ($ope == "+") {
    $resultado = $num1 + $num2;
} else if ($ope == "-") {
    $resultado = $num1 - $num2;
} else if ($ope == "*") {
    $resultado = $num1 * $num2;
} else if ($ope == "/") {
    $resultado = $num1 / $num2;
} else {
    echo "Operação inválida.";
}

echo"Resultado: $resultado";
?>