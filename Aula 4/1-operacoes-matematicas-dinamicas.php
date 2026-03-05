<?php

// Declaração de variáveis numéricas
// PHP utiliza tipagem dinâmica, portanto não é necessário declarar o tipo previamente

$precoProduto = 150.00;
$quantidade = 3;
$descontoPercentual = 0.10;

// Operadores aritméticos
// Multiplicação para calcular valor bruto da compra

$valorTotal = $precoProduto * $quantidade;

// Subtração e multiplicação para aplicar desconto percentual

$valorComDesconto = $valorTotal - ($valorTotal * $descontoPercentual);

// Saída de dados

echo "<h2>Cálculo de Compra</h2>";
echo "Preço do produto: R$ $precoProduto <br>";
echo "Quantidade: $quantidade <br>";
echo "Valor total: R$ $valorTotal <br>";
echo "Valor com desconto: R$ $valorComDesconto <br>";

?>