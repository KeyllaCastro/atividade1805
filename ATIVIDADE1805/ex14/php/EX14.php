<?php
/*14. Faça um programa que lê as duas notas parciais obtidas por um aluno numa
disciplina ao longo de um semestre, e calcule a sua média.
MÉDIA DE APROVEITAMENTO / CONCEITO (A, B, C e etc.)
• Média entre 9.0 e 10.0 – Nota: A;
• Média entre 7.5 e 9.0 – Nota: B;
• Média entre 6.0 e 7.5 – Nota: C;
• Média entre 4.0 e 6.0 – Nota: D;
• Média entre 4.0 e 0.0 – Nota: E;
O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a
mensagem “APROVADO”, se o conceito for A, B ou C ou “REPROVADO” se o conceito for
D ou E.*/

$nota1 = (float)$_POST['nota1'];
$nota2 = (float)$_POST['nota2'];

$media = ($nota1 + $nota2) / 2;

if ($media >= 9.0 && $media <= 10.0) {
    echo "Média A, nota $media Aprovado";
} else if ($media >= 7.5 && $media < 9.0) {
     echo "Média B, nota $media Aprovado";
} else if ($media >= 6.0 && $media < 7.5) {
    echo "Média C, nota $media Aprovado";
} else if ($media >= 4.0 && $media < 6.0) {
     echo "Média D, nota $media Reprovado";
} else if ($media >= 0.0 && $media < 4.0) {
    echo "Média E, nota: $media Reprovado";
} else {
  echo "Inválido, erro no cálculo";
}

?>