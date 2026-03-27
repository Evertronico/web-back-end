<?php

$protudos = [
    ['nome' => 'abajur', 'preco' => 1.99],
    ['nome' => 'lolo', 'preco' => 19.99],
    ['nome' => 'pipoca de microondas saber bacon', 'preco' => 3.50],
    ['nome' => 'crack from rosario de limeira', 'preco' => 15.00],
    ['nome' => 'amor reciproco', 'preco' => 99999999999.99]
];

echo "<table border='1'>";
echo "<tr><td>produto</td><td>preço</td></tr>";

foreach($protudos as $produto){
    echo "<tr>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['preco']}</td>";
    echo "</tr>";
}

echo "</table>";

foreach($protudos as $produto){
    $total = $produto['preco'] * $produto['quantidade'];
}
echo