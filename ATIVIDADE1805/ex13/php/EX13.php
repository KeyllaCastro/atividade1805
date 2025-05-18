<?php
/*Faça um Programa que leia um número e exiba o dia correspondente da semana.
Exemplo, se o usuário digitar o número “1”, o programa tem que retornar “1-
Domingo” e assim sucessivamente.
Se o usuário digitar outro valor, o programa deverá retornar “valor inválido”.*/
$diaSemana = (int)$_POST["diaSemana"];

if($diaSemana == "1"){
echo "1 - Domingo";}
else if($diaSemana == "2") {
echo "2 - Segunda";}
else if($diaSemana == "3") {
echo "3 - Terça";}
else if($diaSemana == "4") {
echo "4 - Quarta";}
else if($diaSemana == "5") {
echo "5 - Quinta";}
else if($diaSemana == "6") {
echo "6 - Sexta";}
else if($diaSemana == "7") {
echo "7 - Sábado";}
else echo "Número inválido";

?>
