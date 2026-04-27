<?php
$produto = "Teclado Mecânico";
$preco_string = "150.50"; // String numérica para demonstrar coerção
$quantidade = 3;

// Coerção de tipos
$preco = (float)$preco_string; 

// Operação aritmética
$valor_total = $preco * $quantidade;

// Operação relacional
$estoque_baixo = $quantidade < 5;

// Exibição técnica dos tipos
echo "<h3>Depuração de Dados:</h3>";
var_dump($produto, $preco, $quantidade); 

echo "<h3>Resumo da Venda:</h3>";
echo "Produto: $produto <br>";
echo "Total: R$ " . number_format($valor_total, 2, ',', '.') . "<br>";
echo "Estoque Baixo? " . ($estoque_baixo ? "Sim" : "Não");
?>