<?php
/*21. Faça um Programa para um caixa eletrônico. O programa deverá perguntar ao usuário
a valor do saque e depois informar quantas notas de cada valor serão fornecidas. As
notas disponíveis serão as de 1, 5, 10, 50 e 100 reais. O valor mínimo é de 10 reais e o
máximo de 600 reais.
O programa não deve se preocupar com a quantidade de notas existentes na máquina.
• Exemplo 1: Para sacar a quantia de 256 reais, o programa fornece duas notas de
100, uma nota de 50, uma nota de 5 e uma nota de 1;
• Exemplo 2: Para sacar a quantia de 399 reais, o programa fornece três notas de
100, uma nota de 50, quatro notas de 10, uma nota de 5 e quatro notas de 1.*/
$valor = (int)$_POST['valor'];

if ($valor < 10 || $valor > 600) {
    echo "Valor fora do intervalo permitido (10 a 600 reais).";
} else {
    $notas100 = (int)($valor / 100);
    $valor = $valor - ($notas100 * 100);
    
    $notas50 = (int)($valor / 50);
    $valor = $valor - ($notas50 * 50);
    
    $notas10 = (int)($valor / 10);
    $valor = $valor - ($notas10 * 10);
    
    $notas5 = (int)($valor / 5);
    $valor = $valor - ($notas5 * 5);
    
    $notas1 = $valor;

    echo "Notas de 100: $notas100<br>";
    echo "Notas de 50: $notas50<br>";
    echo "Notas de 10: $notas10<br>";
    echo "Notas de 5: $notas5<br>";
    echo "Notas de 1: $notas1";
}
?>