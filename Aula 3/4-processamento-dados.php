<?php
$produto = "Notebook";
$preco = 4500.00;
$desconto = 0.10;

// Cálculo dinâmico
$valorFinal = $preco - ($preco * $desconto);

// Exibição estruturada
echo "<h1>Resumo da Compra</h1>";
echo "<p>Produto: $produto</p>";
echo "<p>Preço original: R$ $preco</p>";
echo "<p>Desconto aplicado: 10%</p>";
echo "<p>Valor final: R$ $valorFinal</p>";

// Inspeção de tipo
var_dump($valorFinal);
?>