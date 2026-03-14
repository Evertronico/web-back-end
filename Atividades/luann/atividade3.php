<?php

$valorCompra = 800;
$clienteVip = true;

$descontoCompra = 0;

if ($valorCompra > 500) {
    $descontoCompra = $descontoCompra + 0.10;

}if ($clienteVip) {
    $descontoCompra = $descontoCompra + 0.05;
}

$valorFinal = $valorCompra - ($valorCompra + $descontoCompra);

echo "Valor da compra ". $valorCompra. "<br>";
echo "Cliente VIP ". ($clienteVip ? "true" : "false")."<br>";
echo "Valor final com desconto " . $valorFinal;

?>