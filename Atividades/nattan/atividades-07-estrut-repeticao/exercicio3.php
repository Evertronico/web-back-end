<?php

// lista de numeros em um array associativo
$numeros = [
    ['numero' => 18],
    ['numero' => 64],
    ['numero' => 12],
    ['numero' => 16],
    ['numero' => 25],
    ['numero' => 36],
];

$soma = 0;

foreach ($numeros as $numero) {
    echo "<p>Somando $soma + {$numero['numero']}</p>";
    $soma += $numero['numero'];
};

echo "<p>A soma dos numeros é $soma</p>";