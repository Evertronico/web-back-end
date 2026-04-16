<?php

// Lista de produtos
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150]
];

// Construção dinâmica de tabela HTML
echo "<table border='1'>";
echo "<tr><th>Produto</th><th>Preço</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>R$ {$produto['preco']}</td>";
    echo "</tr>";
}

echo "</table>";

?>