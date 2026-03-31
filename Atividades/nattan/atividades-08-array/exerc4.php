<?php

// array multidimensional de produtos vendidos

$produtosVend = [
    ["nome" => "Notebook", "preco" => 4000.00, "quantidade" => 3],
    ["nome" => "Mouse", "preco" => 100.00, "quantidade" => 4],
    ["nome" => "Teclado", "preco" => 150.00, "quantidade" => 7],
    ["nome" => "Monitor", "preco" => 800.00, "quantidade" => 4],
];

foreach ($produtosVend as $produto) {
    $total = $produto['preco'] * $produto['quantidade'];

    echo "Produto: " . $produto["nome"] . "- Preço: " . $produto['preco'] . "- Quantidade: " . $produto['quantidade'] . " - Total: R$" . $total . "<br>";
}