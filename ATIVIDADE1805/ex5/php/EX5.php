<?php
/*5. Faça um programa para a leitura de duas notas parciais de um aluno.
O programa deve calcular a média alcançada por aluno e apresentar:
• A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
• A mensagem "Reprovado", se a média for menor do que sete;
• A mensagem "Aprovado com Distinção", se a média for igual a dez.*/

$notaI = $_POST["notaI"];
$notaII = $_POST["notaII"];
$media = ($notaI + $notaII) / 2;

if ($media == 10) {
    echo "Aprovado com Distinção";
} else if ($media >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>