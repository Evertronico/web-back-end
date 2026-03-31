<?php

// array associativo com informações de um produto
$produto = [
    "nome" => "MacBook",
    "preco" => "9999.90",
    "quantidade" => "50",
];

// foreach com chave e valor
foreach ($produto as $chave => $valor) {
    echo "{$chave} : {$valor} <br>";
};