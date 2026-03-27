<?php

// Array associativo representando um usuário
$usuario = [
    "nome" => "Mariana",
    "idade" => 25,
    "email" => "mariana@email.com",
    "ativo" => true
];

// Acesso aos valores por chave
echo "<h2>Dados do Usuário</h2>";

echo "Nome: " . $usuario["nome"] . "<br>";
echo "Idade: " . $usuario["idade"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "Status: " . ($usuario["ativo"] ? "Ativo" : "Inativo");

?>