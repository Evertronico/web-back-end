<?php

$produtos = [
    ["nome" => "Camiseta", "preco" => 39.90, "quantidade" => 3],
    ["nome" => "Calça Jeans", "preco" => 89.90, "quantidade" => 2],
    ["nome" => "Tênis", "preco" => 149.90, "quantidade" => 1]
];

$totalGeral = 0;

echo "<table border='1'>";
echo "<tr><th>Produto</th><th>Preço</th><th>Quantidade</th><th>Total</th></tr>";

foreach ($produtos as $item) {
    $totalProduto = $item["preco"] * $item["quantidade"];
    $totalGeral += $totalProduto;
    echo "<tr>";
    echo "<td>" . $item["nome"] . "</td>";
    echo "<td>" . $item["preco"] . "</td>";
    echo "<td>" . $item["quantidade"] . "</td>";
    echo "<td>" . $totalProduto . "</td>";
    echo "</tr>";
}

echo "<tr><td colspan='3'><strong>Total Geral</strong></td><td><strong>" . $totalGeral . "</strong></td></tr>";
echo "</table>";


?>