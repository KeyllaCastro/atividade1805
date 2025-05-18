
<?php
/*Faça um Programa para leitura de três notas parciais de um aluno. O programa deve
calcular a média alcançada por aluno e presentar:
a) A mensagem "Aprovado", se a média for maior ou igual a 7, com a respectiva
média alcançada;
b) A mensagem "Reprovado", se a média for menor do que 7, com a respectiva média
alcançada;
c) A mensagem "Aprovado com Distinção", se a média for igual a10.*/
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Média: $media";

if ($media == 10) { 
    echo "Aprovado com Distinção"; 
} elseif ($media >= 7 && $media < 10) { 
    echo "Aprovado"; 
} elseif ($media <7) { 
    echo "Reprovado"; 
} else {
    echo "Nota inválida";
}
?>