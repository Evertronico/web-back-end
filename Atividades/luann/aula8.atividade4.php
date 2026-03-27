<?php

$produtos = [
    [
        "nome" => "Arroz",
        "preco" => 25.90,
        "quantidade" => 10
    ],
    [
        "nome" => "Feijão",
        "preco" => 8.50,
        "quantidade" => 20
    ],
    [
        "nome" => "Macarrão",
        "preco" => 5.75,
        "quantidade" => 15
    ]
];

echo "<table border='2'>";
echo "<tr><td>Produto</td><td>Preço</td><td>Quantidade</td><td>Total</td></tr>";

$total = 0;

foreach($produtos as $produto){
    $subtotal = $produto['preco'] * $produto['quantidade'];
    $total += $subtotal;

    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['preco']}</td>";
    echo "<td>{$produto['quantidade']}</td>";
    echo "<td>{$subtotal}</td>";
    echo "</tr>";
}

echo "<tr>";
echo "<td colspan='3'><strong>Total Geral</strong></td>";
echo "<td>{$total}</td>";
echo "</tr>";

echo "</table>";


    