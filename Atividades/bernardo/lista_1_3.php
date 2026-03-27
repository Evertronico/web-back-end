<?php 

$valorCompra = 800;
$clienteVip = true;
$descontoPorCompra = true;


$descontoEspecial = ($valorCompra > 500) && ($descontoPorCompra);

if ($descontoEspecial) {
    $valorFinal = $valorCompra - ($valorCompra * 0.10);
} else {
    $valorFinal = $valorCompra;
}

$valorFinalVip = ($clienteVip == true);

if ($valorFinalVip) {
    $valorFinalVip = $valorFinal - ($valorFinal * 0.05);
} else {
    $valorFinalVip = $valorFinal;
}

echo "<h2>Processamento da compra</h2>";
echo "Valor da compra: R$ $valorCompra<br>";
echo "Cliente Vip: ";
var_dump($clienteVip);
echo "<br>Desconto por compra acima de R$ 500,00: ";
var_dump($descontoPorCompra);
echo "<br>Desconto aplicado? ";
var_dump($descontoEspecial);
echo "<br>Valor final: R$ $valorFinalVip";

?>