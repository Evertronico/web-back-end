<?php
//sistema de desconto em e-commerce

$valorCompra = 1200;
$clienteVip = true;
$cupomValido = true;

//operadores logicos comninados

$descontoEspecial = ($valorCompra > 1000) && ($clienteVip || $cupomValido);
if ($descontoEspecial){
    $valorFinal = $valorCompra * 85/100;
} else {
    $valorFinal = $valorCompra;
}

//exibir resultados
echo "<h2>procesasmento de dados</h2>";
echo "valor compra $valorCompra<br>";
echo "vliente vip ?";
var_dump($clienteVip);
echo "cupom valido ?";
var_dump($cupomValido);
echo "desconto aplicado ?";
var_dump($descontoEspecial);
echo "desconto aplicado $valorFinal";
//mds pq fica tao feio
?>