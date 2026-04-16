<?php

// array associativo possui chaves e valores
$usuario = [
    "nome" => "Maria",
    "idade" => 30, 
    "email" => "maria@example.com",
    "ativo" => true
];

// acessar os valores usando as chaves
echo "Nome: " . $usuario["nome"] . "<br>";
echo "Idade: " . $usuario["idade"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "Ativo: " . $usuario["ativo"] ? "Sim" : "Não";