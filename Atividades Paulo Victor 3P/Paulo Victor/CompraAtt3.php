<?php   

$valorCompra = 800; // valor da compra
$clienteVip = true; // cliente é VIP
$desconto = 0; // variável para armazenar o desconto aplicado

if ($valorCompra > 500) {
    $desconto = 10;
    if ($clienteVip) {
        $desconto += 5; // desconto adicional para clientes VIP
    }
    $valorFinal = $valorCompra * (1 - $desconto / 100);
    echo "<h2>Processamento da Compra</h2>";
    echo "Valor da Compra: R$ $valorCompra<br>";
    echo "Cliente VIP: " ;var_dump($clienteVip);
    echo "Desconto aplicado: $desconto%<br>";
    echo "Valor final da compra: R$ " . number_format($valorFinal, 2) . "<br>";

}  