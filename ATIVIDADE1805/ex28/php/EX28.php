<?php
$tipo = $_POST['tipo'];
$quantidade = (float)$_POST['quantidade'];
$cartao = $_POST['cartao'];

// Preços
if ($tipo == "file duplo") {
    $precoKg = ($quantidade <= 5) ? 4.90 : 5.80;
} elseif ($tipo == "alcatra") {
    $precoKg = ($quantidade <= 5) ? 5.90 : 6.80;
} elseif ($tipo == "picanha") {
    $precoKg = ($quantidade <= 5) ? 6.90 : 7.80;
}

$valorTotal = $quantidade * $precoKg;
$desconto = ($cartao == "sim") ? $valorTotal * 0.05 : 0;
$valorPagar = $valorTotal - $desconto;

echo "<h2>Cupom Fiscal</h2>";
echo "Tipo de Carne: $tipo<br>";
echo "Quantidade: $quantidade Kg<br>";
echo "Preço por Kg: R$ $precoKg<br>";
echo "Preço Total: R$ $valorTotal<br>";
echo "Pagamento: " . ($cartao == "sim" ? "Cartão Tabajara" : "Outro") . "<br>";
if ($desconto > 0) echo "Desconto: R$ $desconto<br>";
echo "Valor a Pagar: R$ $valorPagar";
?>