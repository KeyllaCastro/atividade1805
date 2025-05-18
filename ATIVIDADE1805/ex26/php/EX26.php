<?php

/*Um posto está vendendo combustíveis com a seguinte tabela de
descontos:
Álcool:
a) até 20 litros, desconto de 3% por litro
b) acima de 20 litros, desconto de 5% por litro
Gasolina:
a) até 20 litros, desconto de 4% por litro
b) acima de 20 litros, desconto de 6% por litro
Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível
(codificado da seguinte forma: A-álcool, Ggasolina), calcule e imprima o valor a ser pago
pelo cliente.
Sabendo-se que o preço do litro da gasolina é R$ 5,50. O preço
do litro do álcool é R$ 3,90*/
$litros = (float)$_POST['litros'];
$tipo = $_POST['tipo'];

$precoAlcool = 3.90;
$precoGasolina = 5.50;
$desconto = 0;
$precoFinal = 0;

if ($tipo == 'A') {
    $desconto = ($litros <= 20) ? 0.03 : 0.05;
    $precoFinal = $litros * $precoAlcool * (1 - $desconto);
} elseif ($tipo == 'G') {
    $desconto = ($litros <= 20) ? 0.04 : 0.06;
    $precoFinal = $litros * $precoGasolina * (1 - $desconto);
}

echo "O valor a ser pago é R$ $precoFinal";
?>