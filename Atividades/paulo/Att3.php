<?php

//array associativo com informaçoes de um produto
$produto = [
    "Marca" => "Samsung",
    "Modelo" => "Galaxy S26",
    "Preco" => 1500.00,
    "Estoque" => 20,
    "Origem" => "Coreia do Sul"
];

foreach ($produto as $chave => $dados) {
    echo "{$chave} : {$dados} <br>";
}