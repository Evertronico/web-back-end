<?php
echo "<h1>Listagem de Produtos do Estoque</h1>\n";

$produtos = [
    [
        "nome" => "Mouse que brilha",
        "preco" => 89.90,
        "quantidade" => 25
    ],
    [
        "nome" => "Teclado Mecâanico",
        "preco" => 249.90,
        "quantidade" => 15
    ],
    [
        "nome" => "Monitor top de linha 24 pol",
        "preco" => 899.90,
        "quantidade" => 8
    ],
    [
        "nome" => "Headset Bluetooth dos top demais",
        "preco" => 159.90,
        "quantidade" => 30
    ],
    [
        "nome" => "Webcam Full HD 4k 9 mil fps",
        "preco" => 199.90,
        "quantidade" => 12
    ]
];

$totalGeral = 0;

echo "<table border='1' cellpadding='10' cellspacing='0'>\n";
echo "    <thead>\n";
echo "        <tr>\n";
echo "            <th>#</th>\n";
echo "            <th>Produto</th>\n";
echo "            <th>Preço</th>\n";
echo "            <th>Quantidade</th>\n";
echo "            <th>Total</th>\n";
echo "        </tr>\n";
echo "    </thead>\n";
echo "    <tbody>\n";

$contador = 1;
foreach ($produtos as $produto) {
    $totalProduto = $produto['preco'] * $produto['quantidade'];
    $totalGeral += $totalProduto;

    echo "        <tr>\n";
    echo "            <td>$contador</td>\n";
    echo "            <td>{$produto['nome']}</td>\n";
    echo "            <td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>\n";
    echo "            <td align='center'>{$produto['quantidade']}</td>\n";
    echo "            <td>R$ " . number_format($totalProduto, 2, ',', '.') . "</td>\n";
    echo "        </tr>\n";

    $contador++;
}

echo "    </tbody>\n";
echo "    <tfoot>\n";
echo "        <tr>\n";
echo "            <th colspan='4' align='right'>Valor Total do Estoque:</th>\n";
echo "            <th>R$ " . number_format($totalGeral, 2, ',', '.') . "</th>\n";
echo "        </tr>\n";
echo "    </tfoot>\n";
echo "</table>\n";

echo "<h2>Resumo dos Produtos</h2>\n";

$totalProdutos = count($produtos);
for ($i = 0; $i < $totalProdutos; $i++) {
    $totalItem = $produtos[$i]['preco'] * $produtos[$i]['quantidade'];
    echo "<p>" . ($i + 1) . ". " . $produtos[$i]['nome'] . " — Estoque: R$ " . number_format($totalItem, 2, ',', '.') . "</p>\n";
}

?>
