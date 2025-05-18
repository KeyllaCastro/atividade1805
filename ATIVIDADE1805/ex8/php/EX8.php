<?php
/*. Faça um programa que pergunte o preço de três produtos e informe qual produto você
deve comprar, sabendo que a decisão é sempre pelo mais barato*/

$precoI = $_POST["precoI"];
$precoII = $_POST["precoII"];
$precoIII = $_POST["precoIII"];

if($precoI <= $precoII && $precoI <= $precoIII) {
    echo "Compre o primeiro produto do valor: $precoI é mais barato <br>";
} else if ($precoII <= $precoI && $precoII <= $precoIII) {
    echo "Compre o segundo produto do valor: $precoII é mais barato <br>";
}
else {
    echo"Compre o terceiro produto do valor: $precoIII é mais barato <br>";
}

?>