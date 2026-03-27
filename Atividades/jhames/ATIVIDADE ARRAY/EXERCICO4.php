<?php

$produtos = [
    ['nome' => 'Camiseta', 'preco' => 29.99, 'quantidade' => 5],
    ['nome' => 'Calça', 'preco' => 59.99, 'quantidade' => 3],
    ['nome' => 'Tênis', 'preco' => 89.99, 'quantidade' => 2],
];  

foreach ($produtos as $produto) {
    $total = $produto['preco'] * $produto['quantidade'];
    echo "Produto: " . $produto['nome'] . ", Preço: R$ " . $produto['preco'] . ", Quantidade: " . $produto['quantidade'] . ", Total: R$ " . $total . "\n";
}