<?php
echo "<h2>Exercício 3 – Array Associativo</h2>\n";

$produto = [
    "nome" => "Notebook Dell Inspiron",
    "preco" => 4500.00,
    "quantidade" => 12
];

echo "<ul>\n";
foreach ($produto as $chave => $valor) {
    if ($chave == "preco") {
        $valorFormatado = "R$ " . number_format($valor, 2, ',', '.');
    } else {
        $valorFormatado = $valor;
    }
    echo "<li><strong>" . ucfirst($chave) . ":</strong> $valorFormatado</li>\n";
}
echo "</ul>\n";
?>
