<?php

$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150]
];

// Construção de tabela HTML dinâmica
echo "<table border='1'>";
echo "<tr><th>Produto</th><th>Preço</th></tr>";

foreach ($produtos as $produto) {

    // Aplicação de desconto como regra de negócio
    $precoFinal = ($produto["preco"] > 100) ? $produto["preco"] * 0.9 : $produto["preco"];

    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>R$ $precoFinal</td>";
    echo "</tr>";
}

echo "</table>";

?>