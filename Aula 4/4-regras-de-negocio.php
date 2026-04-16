<?php
// Simulação de sistema de desconto em e-commerce
$valorCompra = 1200;
$clienteVip = true;
$cupomValido = true;

// Operadores relacionais e lógicos combinados
$descontoEspecial = ($valorCompra > 1000) && ($clienteVip || $cupomValido);

// Cálculo do desconto
if($descontoEspecial){
    $valorFinal = $valorCompra * 0.85;
} else {
    $valorFinal = $valorCompra;
}

// Exibição dos resultados
echo "<h2>Processamento de Desconto</h2>";

echo "Valor da compra: $valorCompra <br>";
echo "Cliente VIP: ";
var_dump($clienteVip);

echo "<br>Cupom válido: ";
var_dump($cupomValido);

echo "<br>Desconto aplicado? ";
var_dump($descontoEspecial);

echo "<br>Valor final: R$ $valorFinal";

?>