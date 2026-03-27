<?php

//array associativo  com infromaçoes de um produto

$produto = [
    "nome" => "apple",
    "preco" => 1500.0,
    "estoque" => 50,
];

foreach ($produto as $chave => $valor){
    echo "{$chave }: {$valor}<br>";
}