<?php

$produtos = [
    ["nome" => "Arroz", "preco" => 20, "quantidade" => 2],
    ["nome" => "Feijão", "preco" => 10, "quantidade" => 3],
    ["nome" => "Macarrão", "preco" => 5, "quantidade" => 4]
];

$totalGeral = 0;

echo "<table border='1'>";
echo "<tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Total</th>
      </tr>";

foreach ($produtos as $produto) {

    $totalProduto = $produto["preco"] * $produto["quantidade"];
    $totalGeral += $totalProduto;

    echo "<tr>";
    echo "<td>" . $produto["nome"] . "</td>";
    echo "<td>" . $produto["preco"] . "</td>";
    echo "<td>" . $produto["quantidade"] . "</td>";
    echo "<td>" . $totalProduto . "</td>";
    echo "</tr>";
}

echo "<tr>
        <td colspan='3'><b>Total Geral</b></td>
        <td>$totalGeral</td>
      </tr>";

echo "</table>";

?>