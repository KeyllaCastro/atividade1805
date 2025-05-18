<?php
/*25. Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As
perguntas são:
a. "Telefonou para a vítima?"
b. "Esteve no local do crime?"
c. "Mora perto da vítima?"
d. "Devia para a vítima?"
e. "Já trabalhou com a vítima?"
O programa deve no final emitir uma classificação sobre a participação da pessoa no
crime.
➢ Se a pessoa responder positivamente a 2 questões ela deve ser classificada como
"Suspeita".
➢ Entre 3 e 4 como "Cúmplice";
➢ 5 como "Assassino".
➢ Caso contrário, ele será classificado como “Inocente".
 */
$sim = 0;

if ($_POST['p1'] == 'sim') $sim++;//"Incrementa 1 na contagem de respostas 'sim'"
if ($_POST['p2'] == 'sim') $sim++;
if ($_POST['p3'] == 'sim') $sim++;
if ($_POST['p4'] == 'sim') $sim++;
if ($_POST['p5'] == 'sim') $sim++;

if ($sim == 2) {
    echo "Classificação: Suspeita";
} elseif ($sim >= 3 && $sim <= 4) {
    echo "Classificação: Cúmplice";
} elseif ($sim == 5) {
    echo "Classificação: Assassino";
} else {
    echo "Classificação: Inocente";
}
?>