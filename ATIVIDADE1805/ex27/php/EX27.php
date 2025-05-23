<?php
/* Uma fruteira está vendendo frutas com a seguinte tabela de preços:
                Até 5 Kg        Acima de 5 Kg
    Morango     R$ 2,50 por Kg  R$ 2,20 por Kg
    Maçã        R$ 1,80 por Kg  R$ 1,50 por Kg

    Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$
25,00, receberá ainda um desconto de 10% sobre este total.
Escreva um algoritmo para ler a quantidade (em Kg) de morangos e a quantidade (em Kg)
de maças adquiridas e escreva o valor a ser pago pelo cliente.*/

$kgMorangos = (float)$_POST['kg_morangos'];
$kgMacas = (float)$_POST['kg_macas'];

if ($kgMorangos <= 5) {
    $precoMorangos = 2.50;
} else {
    $precoMorangos = 2.20;
}

if ($kgMacas <= 5) {
    $precoMacas = 1.80;
} else {
    $precoMacas = 1.50;
}
$valorMorangos = $kgMorangos * $precoMorangos;
$valorMacas = $kgMacas * $precoMacas;
$valorTotal = $valorMorangos + $valorMacas;

if (($kgMorangos + $kgMacas) > 8 || $valorTotal > 25) {
    $valorTotal *= 0.90;
}

echo "Valor a pagar: R$ $valorTotal";
?>