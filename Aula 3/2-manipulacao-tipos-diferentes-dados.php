<?php
// Inteiro
$idade = 25;

// Float
$salario = 3500.75;

// String com interpolação
$nome = "Mariana";

// Booleano
$ativo = true;

// Exibição estruturada
echo "<h2>Dados do Usuário</h2>";
echo "<p>Nome: $nome</p>";
echo "<p>Idade: $idade anos</p>";
echo "<p>Salário: R$ $salario</p>";
echo "<p>Status ativo: " . ($ativo ? "Sim" : "Não") . "</p>";
?>