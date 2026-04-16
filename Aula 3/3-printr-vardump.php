<?php
// Array associativo representando um usuário
$usuario = [
    "nome" => "Carlos",
    "idade" => 30,
    "email" => "carlos@email.com",
    "ativo" => true
];

// print_r mostra estrutura simplificada
echo "<pre>";
print_r($usuario);
echo "</pre>";

// var_dump mostra tipo e tamanho detalhado
echo "<pre>";
var_dump($usuario);
echo "</pre>";
?>