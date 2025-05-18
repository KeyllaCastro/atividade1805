<?php
/*15. Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar e os valores podem ser um triângulo. 
Indique, caso os lados formem um triângulo, se ele é:
• equilátero
• isósceles
• escaleno
Dicas:
• Três lados formam um triângulo quando a soma de quaisquer dois lados for maior
que o terceiro;
• Triângulo Equilátero: três lados iguais;
• Triângulo Isósceles: quaisquer dois lados iguais;
• Triângulo Escaleno: três lados diferentes;*/

$lado1 = (float)$_POST['lado1'];
$lado2 = (float)$_POST['lado2'];
$lado3 = (float)$_POST['lado3'];

if ($lado1 +$lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    if ($lado1 === $lado2 && $lado2 === $lado3) {
        echo " O triangulo é equilátero.";
    } else if ($lado1 === $lado2 || $lado1 === $lado3 || $lado2 === $lado3) {
        echo "O triangulo é isósceles.";
    } else {
        echo "O triangulo é escaleno.";
    }
} else {
    echo"Valor inválido, os valores digitados não formam um triângulo.";
}
?>