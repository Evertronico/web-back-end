<?php

// Dados simulando um sistema de acesso

$idade = 20;
$possuiIngresso = true;

// Operador lógico AND (&&)
// Ambas as condições precisam ser verdadeiras

$entradaPermitida = ($idade >= 18) && ($possuiIngresso == true);

echo "<h2>Controle de Entrada</h2>";

echo "Idade: $idade <br>";
echo "Possui ingresso: ";
var_dump($possuiIngresso);

echo "<br>Entrada permitida? <br>";
var_dump($entradaPermitida);

?>