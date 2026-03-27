<?php

//versao mais facil
$produtos =[
    ["nome" => "carro", "valor" => 100000, "quantidade" => 2,],
    ["nome" => "arroz", "valor" => 50, "quantidade" => 5,],
    ["nome" => "fuba", "valor" => 10, "quantidade" => 2,]
];

echo "<table border='1'>";
echo "<tr><td>produto</td><td>preço</td><td>quantidade</td><td>total</td></tr>";

foreach($produtos as $produto){
    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['valor']}</td>";
    echo "<td>{$produto['quantidade']}</td>";
    echo "<td>" . ($produto['valor'] * $produto['quantidade']) . "</td>";
    echo "</tr>";
}

$total = 0;

foreach($produtos as $produto){
    $total += $produto['valor'] * $produto['quantidade'];
}

    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>{$total}</td>";
    echo "</tr>";

echo "</table>";

