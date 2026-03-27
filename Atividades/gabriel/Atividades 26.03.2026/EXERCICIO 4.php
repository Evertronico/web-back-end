<?php
echo "<h2>Atividade 4 – Tabela de Vendas</h2>\n";

$produtos = [
    [
        "nome" => "Teclado Mecânico",
        "preco" => 250.00,
        "quantidade" => 2
    ],
    [
        "nome" => "Mouse Sem Fio",
        "preco" => 120.50,
        "quantidade" => 3
    ],
    [
        "nome" => "Monitor 24 polegadas",
        "preco" => 800.00,
        "quantidade" => 1
    ],
    [
        "nome" => "Headset Gamer",
        "preco" => 350.00,
        "quantidade" => 2
    ]
];

$totalGeral = 0;

echo "<table border='1' cellpadding='10' cellspacing='0'>\n";
echo "    <thead>\n";
echo "        <tr>\n";
echo "            <th>Produto</th>\n";
echo "            <th>Preço Unitário</th>\n";
echo "            <th>Quantidade</th>\n";
echo "            <th>Valor Total do Produto</th>\n";
echo "        </tr>\n";
echo "    </thead>\n";
echo "    <tbody>\n";

foreach ($produtos as $produto) {
    $valorTotalProduto = $produto['preco'] * $produto['quantidade'];
    $totalGeral += $valorTotalProduto;
    
    echo "        <tr>\n";
    echo "            <td>{$produto['nome']}</td>\n";
    echo "            <td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>\n";
    echo "            <td align='center'>{$produto['quantidade']}</td>\n";
    echo "            <td>R$ " . number_format($valorTotalProduto, 2, ',', '.') . "</td>\n";
    echo "        </tr>\n";
}

echo "    </tbody>\n";
echo "    <tfoot>\n";
echo "        <tr>\n";
echo "            <th colspan='3' align='right'>Valor Total Geral:</th>\n";
echo "            <th>R$ " . number_format($totalGeral, 2, ',', '.') . "</th>\n";
echo "        </tr>\n";
echo "    </tfoot>\n";
echo "</table>\n";
?>
