<?php

$valorCompra = 800;
$clienteVip = true;

$desconto = 0;

if ($valorCompra > 500) {
    $desconto = $desconto + 0.10;
}

if ($clienteVip) {
    $desconto = $desconto + 0.05;
}

$valorFinal = $valorCompra ($valorCompra + $desconto);

echo "Valor da compra ". $valorCompra. "<br>";
echo "Cliente VIP". ($clienteVip ? "true" : "false")."<br>";
echo "Valor final com desconto". $valorFinal;

?>