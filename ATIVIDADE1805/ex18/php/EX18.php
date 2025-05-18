<?php
/*Faça um Programa que peça uma data no formato dd/mm/aaaa e determine se a
mesma é uma data válida.*/
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];

if (checkdate($mes, $dia, $ano)) {
    echo "Esta data é válida.";
} else {
    echo "Esta data é inválida.";
}
?>
?>