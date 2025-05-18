
<?php
//Faça um Programa que peça um número e informe se o número é inteiro ou decimal.
$num = $_POST['num'];

 if ((float)$num == (int)$num) { 
    echo"O número  $num é inteiro.";
} else {
    echo"O número $num é decimal.";
}
?>