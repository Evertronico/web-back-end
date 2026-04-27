<?php
// Array com pelo menos 5 produtos
$estoque = [
    ["nome" => "Mouse", "preco" => 50.00, "qtd" => 10],
    ["nome" => "Monitor", "preco" => 800.00, "qtd" => 2],
    ["nome" => "Cabo HDMI", "preco" => 25.00, "qtd" => 15],
    ["nome" => "Headset", "preco" => 120.00, "qtd" => 5],
    ["nome" => "Webcam", "preco" => 200.00, "qtd" => 3]
];

$total_geral = 0;
$i = 0; // Contador para a estrutura adicional

echo "<table border='1'>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Qtd</th>
            <th>Total Item</th>
        </tr>";

// Percorrer dados com foreach
foreach ($estoque as $item) {
    $subtotal = $item['preco'] * $item['qtd']; // Cálculo dentro do loop
    $total_geral += $subtotal;

    echo "<tr>
            <td>{$item['nome']}</td>
            <td>R$ {$item['preco']}</td>
            <td>{$item['qtd']}</td>
            <td>R$ " . number_format($subtotal, 2) . "</td>
          </tr>";
}
echo "</table>";

// Exibição do valor total geral
echo "<h4>Valor Total em Estoque: R$ " . number_format($total_geral, 2) . "</h4>";

// Estrutura de repetição adicional apenas para demonstrar o requisito
echo "Contagem de itens no estoque: ";
while ($i < count($estoque)) {
    $i++;
}
echo ($i);
?>