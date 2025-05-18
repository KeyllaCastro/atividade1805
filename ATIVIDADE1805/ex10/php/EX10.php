<?php
/*Faça um Programa que pergunte em que turno você estuda.
Peça para digitar “M-matutino” ou “V-Vespertino” ou “N- Noturno”.
Imprima a mensagem "Bom Dia!" ou "Boa Tarde!" ou "Boa Noite!" ou "Valor
Inválido!" de acordo com a opção selecionada.*/
if(isset($_POST['turno'])) {
    $turno = strtoupper($_POST['turno']);

if ($turno == "M" ){
    echo "Bom Dia!";
} else if ($turno == "V"){
    echo"Boa Tarde!";
} else if ($turno == "N") {
    echo "Boa Noite!";
} else {
    echo"Valor Inválido!";
}
}
?>