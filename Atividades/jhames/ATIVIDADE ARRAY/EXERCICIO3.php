<?php

$produtos = [
    ['nome' => 'Camiseta', 'preco' => 29.99],
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto['nome'] . ", Preço: R$ " . $produto['preco'] . "\n";
}