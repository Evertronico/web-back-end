<?php
// Usei o exemplo 4 da aula 5 como base

// simulacao de sistema de desconto em e-commerce
$valorCompra = 800;
$clienteVip = true;

$desconto = 0;

// desconto de 10% em + 500
if ($valorCompra > 500) {
    $desconto = $valorCompra * 0.10;
}

// desconto adicional de 5% para clientes VIP
if ($valorCompra > 500 && $clienteVip) {
    $desconto = ($valorCompra * 0.15);
}

// calculo do valor final
$ValorFinal = $valorCompra - $desconto;

// exibicao dos resultados
echo "<h2>SProcessamento da compra</h2>";
echo "Valor da compra: R$ $valorCompra <br>";
echo "Cliente Vip: ";
var_dump($clienteVip);
echo "<br>Valor final com desconto: R$ $ValorFinal";