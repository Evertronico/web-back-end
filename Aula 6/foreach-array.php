<?php

// Array associativo representando dados de um usuário
$usuario = [
    "nome" => "Ana",
    "idade" => 28,
    "email" => "ana@email.com"
];

// foreach percorre cada elemento do array
// $chave representa o índice e $valor representa o conteúdo
foreach ($usuario as $chave => $valor) {

    echo "$chave: $valor <br>";
}

?>