<?php
/*16. Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c.
O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:
a) Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve fazer pedir os demais valores.
• Informe ao usuário e encerre o programa;
b) Se o delta calculado for negativo, a equação não possui raízes reais.
• Informe ao usuário e encerre o programa;
c) Se o delta calculado for igual a zero a equação possui apenas uma raiz real
• informe-a ao usuário;
d) Se o delta for positivo, equação possui duas raízes reais;
• informe-a ao usuário; */

$valorA = $_POST['valorA'];
$valorB = $_POST['valorB'];
$valorC = $_POST['valorC'];

if ($valorA == 0) {
    echo "Não é equação do 2º grau (A não pode ser zero)";
    exit;
}

$delta = $valorB*$valorB - 4*$valorA*$valorC;

if ($delta < 0) {
    echo "Não tem raízes reais (Delta negativo)";
} else if ($delta == 0) {
    $raiz = -$valorB / (2*$valorA);
    echo "Tem uma raiz real: $raiz";
} else {
    $raiz1 = (-$valorB + $delta ** 0.5) / (2 * $valorA);
    $raiz2 = (-$valorB - $delta ** 0.5) / (2 * $valorA);
    echo "Tem duas raízes reais: $raiz1 e $raiz2";
}
?>