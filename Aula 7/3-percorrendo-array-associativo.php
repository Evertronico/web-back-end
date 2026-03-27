<?php

$produto = [
    "nome" => "Notebook",
    "preco" => 3500,
    "estoque" => 10
];

// foreach com chave e valor
foreach ($produto as $chave => $valor) {

    echo "$chave: $valor <br>";
}

?>