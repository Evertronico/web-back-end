<?php

$nomeProduto = "Notebook Dell o topzera";
$preco = 3499.90;
$quantidade = 3;

$valorTotal = $preco * $quantidade;

$acimaDeDezMil = $valorTotal > 10000;

echo "<h1>Cálculo de Produto</h1>\n";

echo "<p><strong>Produto:</strong> $nomeProduto</p>\n";
echo "<p><strong>Preço unitário:</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>\n";
echo "<p><strong>Quantidade:</strong> $quantidade</p>\n";
echo "<p><strong>Valor total:</strong> R$ " . number_format($valorTotal, 2, ',', '.') . "</p>\n";

echo "<br>\n";
echo "<p>O valor total é maior que R$ 10.000? <strong>" . ($acimaDeDezMil ? "Sim" : "Não") . "</strong></p>\n";

$precoString = "150";
$quantidadeInt = 4;

$resultadoCoercao = $precoString * $quantidadeInt;

echo "<hr>\n";
echo "<h2>Coerção de tipos</h2>\n";
echo "<p>A variável \$precoString é uma string com valor \"$precoString\"</p>\n";
echo "<p>Ao multiplicar por $quantidadeInt, o PHP converte automaticamente: resultado = $resultadoCoercao</p>\n";

echo "<hr>\n";
echo "<h2>Tipos das variáveis (var_dump)</h2>\n";
echo "<pre>\n";

echo "\$nomeProduto = ";
var_dump($nomeProduto);

echo "\$preco = ";
var_dump($preco);

echo "\$quantidade = ";
var_dump($quantidade);

echo "\$valorTotal = ";
var_dump($valorTotal);

echo "\$acimaDeDezMil = ";
var_dump($acimaDeDezMil);

echo "\$precoString = ";
var_dump($precoString);

echo "\$resultadoCoercao = ";
var_dump($resultadoCoercao);

echo "</pre>\n";

?>
