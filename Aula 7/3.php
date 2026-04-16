<?php

// array associativo com informações de um produto
$produto = [
    "marca" => "Apple",
    "modelo" => "iPhone 17 Pro",
    "preco" => 5999.99,
    "estoque" => 50,
    "origem" => "EUA"
];

// foreach com chave e valor
foreach ($produto as $chave => $valor) {
    echo "{$chave} : {$valor} <br>";
}