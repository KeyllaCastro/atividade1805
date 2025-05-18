<?php
/*Faça um Programa que leia um número inteiro menor que 1000 e imprima a
quantidade de centenas, dezenas e unidades dele.
Observando os termos no plural a colocação do "e", da vírgula entre outros.
Exemplo:
• 326 = 3 centenas, 2 dezenas e 6 unidades
• 12 = 1 dezena e 2 unidades testar com: 326, 300, 100, 320, 310,305, 301,
101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16*/

$num = $_POST['num'];

if($num >= 0 && $num <= 1000){

$centenas = ($num / 100);
$dezenas = (($num % 100) / 10);
$unidades = ($num % 10);

echo("Centenas: " . $centenas . "<br>");
echo("Dezenas: " . $dezenas . "<br>");
echo("Unidades: " . $unidades . "<br>");

}else{

echo"Digite um número menor que 1000.";

}
?>
?>