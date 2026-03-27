<?php

/// crie um array representando um produto com nome, preço e quantidade em estoque. Exiba os dados dinamicamente

$produto = [
    "marca" => "Nike",
    "modelo" => "Tênis Nike Court Vision Alta Feminino",
    "preco"  => 417,99,
    "estoque" => 35,
    "origem" => "BRA"
];

/// foreach com chave e valor
foreach ($produto as $chave => $valor) {
    echo "{$chave} : {$valor} <br>";
}