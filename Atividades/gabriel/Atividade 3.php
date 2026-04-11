<?php

$totalPedido = 800;
$isVip = true;

$taxaDesconto = 0;

if ($totalPedido > 500) {
    $taxaDesconto += 0.10;
}

if ($isVip) {
    $taxaDesconto += 0.05;          
}

$valorDoDesconto = $totalPedido * $taxaDesconto;
$totalComDesconto = $totalPedido - $valorDoDesconto;

echo "Valor da compra: R$ " . number_format($totalPedido, 2, ',', '.') . "<br>";
echo "Cliente VIP: " . ($isVip ? "Sim" : "Não") . "<br>";
echo "Valor final com desconto: R$ " . number_format($totalComDesconto, 2, ',', '.');

?>