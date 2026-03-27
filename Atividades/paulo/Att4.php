<?php

//crie um array multidimencional com produtos vendidos
$produto = [
    [ 
        "Marca" => "Samsung",
        "Modelo" => "Galaxy S26",
        "Preco" => 1500.00,
        "Estoque" => 20,
        "Origem" => "Coreia do Sul"
    ],
    [
        "Marca" => "Apple",
        "Modelo" => "iPhone 15",
        "Preco" => 2000.00,
        "Estoque" => 15,
        "Origem" => "Estados Unidos"
    ],
    [
        "Marca" => "Xiaomi",
        "Modelo" => "Mi 12",
        "Preco" => 1200.00,
        "Estoque" => 30,
        "Origem" => "China"
    ]
];
//calcule o valor total de cada produto (preço x quantidade em estoque)
foreach ($produto as $chave => $dados) {
    $valorTotal = $dados["Preco"] * $dados["Estoque"];
    echo "O valor total do produto " . $dados["Modelo"] . " é: R$ " . number_format($valorTotal, 2) . "<br>";
}

//exiba uma tabela com todas as informações dos produtos

echo "<table border='1'>";
echo "<tr><th>Marca</th><th>Modelo</th><th>Preço</th><th>Estoque</th><th>Origem</th></tr>";
foreach ($produto as $chave => $dados) {
    echo "<tr>";
    echo "<td>" . $dados["Marca"] . "</td>";
    echo "<td>" . $dados["Modelo"] . "</td>";
    echo "<td>R$ " . number_format($dados["Preco"], 2) . "</td>";
    echo "<td>" . $dados["Estoque"] . "</td>";
    echo "<td>" . $dados["Origem"] . "</td>";
    echo "</tr>";
}

echo "</table>";