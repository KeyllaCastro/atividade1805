<?php
/*11. As Organizações Tabajara resolveram dar um aumento de salário aos seus
colaboradores e lhe contraram para desenvolver o programa que calculará os reajustes.
Faça um programa que recebe o salário de um colaborador e o reajuste segundo o
seguinte critério, baseado no salário atual:
• salários até R$ 280,00 (incluindo): aumento de 20%
• salários entre R$ 280,00 e R$ 700,00: aumento de 15%
• salários entre R$ 700,00 e R$ 1500,00: aumento de 10%
• salários de R$ 1500,00 em diante: aumento de 5%
Após o aumento ser realizado, informe na tela:
• salário antes do reajuste;
• percentual de aumento aplicado;
• valor do aumento;
• novo salário, após o aumento.*/

$salario = $_POST['salario'];
$percentual = 0;
$valorAumento = 0;
$novoSalario = 0;

if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario <= 700) {
    $percentual = 15;
} elseif ($salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$valorAumento = $salario * ($percentual / 100);
$novoSalario = $salario + $valorAumento;

echo "Salário anterior: R$ $salario<br>";
echo "Aumento: $percentual% (R$ $valorAumento)<br>";
echo "Novo salário: R$ $novoSalario";
?>