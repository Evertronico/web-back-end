<?php
// Usei o exemplo 3 da aula 5 como base

// Simulação de controle de acesso a um sistema

// Regra de acesso
$idadeMinima = 18;

// Dados de um usuario
$idadeUsuario = 20;
$cadastroAtivo = true;

// Operador logico e relacional
$entradaPermitida = ($idadeUsuario >= $idadeMinima) && $cadastroAtivo;

// exibe os dados na tela
echo "<h2>Controle de entrada</h2>";
echo "Idade: $idadeUsuario <br>";
echo "Cadastro ativo? ";
var_dump($cadastroAtivo);
echo "Entrada permitida?<br>";
var_dump($entradaPermitida);