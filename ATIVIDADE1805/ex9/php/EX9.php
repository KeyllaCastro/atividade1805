<?php
/*Faça um Programa que leia três números e mostre-os em ordem decrescente.*/

$numI = $_POST["numI"];
$numII = $_POST["numII"];
$numIII = $_POST["numIII"];

// Verifica se numI é maior: I,II e III, ou, I III e II
if ($numI >= $numII && $numI >= $numIII) {
    if ($numII >= $numIII) {
        echo "Ordem decrescente: $numI, $numII, $numIII";
    } else {
        echo "Ordem decrescente: $numI, $numIII, $numII";
    }
} 
// Verifica se numII é o maior: II, I e III, ou II, III, e I
elseif ($numII >= $numI && $numII >= $numIII) {
    if ($numI >= $numIII) {
        echo "Ordem decrescente: $numII, $numI, $numIII";
    } else {
        echo "Ordem decrescente: $numII, $numIII, $numI";
    }
} 
// Se não for o primeiro, numIII é o maior: III, I e II ou III, II e I
else {
    if ($numI >= $numII) {
        echo "Ordem decrescente: $numIII, $numI, $numII";
    } else {
        echo "Ordem decrescente: $numIII, $numII, $numI";
    }
}


?>