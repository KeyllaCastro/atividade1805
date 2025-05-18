<?php
/*12. Faça um programa para o cálculo de uma folha de pagamento, sabendo que os escontos são do Imposto de Renda, que depende do salário bruto (conforme tabela
abaixo) e 3% para o Sindicato e que o FGTS corresponde a 8% do Salário Bruto, mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto
menos os descontos. O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês. Desconto do IR:
• Salário Bruto até 2.259,20 (inclusive) - isento
• Salário Bruto até 1500 (inclusive) - desconto de 7,5%
• Salário Bruto até 2500 (inclusive) - desconto de 15%
• Salário Bruto acima de 2500 - desconto de 22,4%
• Salário Bruto acima de 2500 - desconto de 27,5%
Imprima na tela as informações. */
$valor_hora = (float)$_POST['valor_hora'];
$horas_trabalhadas = (int)$_POST['horas_trabalhadas'];

$salario_bruto = $valor_hora * $horas_trabalhadas;

$fgts = $salario_bruto * 0.08; 
$sindicato = $salario_bruto * 0.03; 

if ($salario_bruto <= 1500) {
    $ir = $salario_bruto * 0.075; 
} elseif ($salario_bruto <= 2500) {
    $ir = $salario_bruto * 0.15; 
} elseif ($salario_bruto <= 2259.20) {
    $ir = 0; 
} else {
    $ir = $salario_bruto * 0.275;
}
if ($salario_bruto <= 2259.20) {
    $ir = 0;
}

$total_descontos = $ir + $sindicato;
$salario_liquido = $salario_bruto - $total_descontos;

echo "<h2>Folha de Pagamento</h2>";
echo "Salário Bruto: R$ $salario_bruto<br>";
echo "Desconto IR: R$ $ir<br>";
echo "Desconto Sindicato: R$ $sindicato<br>";
echo "FGTS: R$ $fgts (empresa paga)<br>";
echo "Total Descontos: R$ $total_descontos<br>";
echo "Salário Líquido: R$ $salario_liquido";
?>