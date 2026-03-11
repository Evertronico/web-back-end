<?php

// Variável representando presença mínima exigida

$frequencia = 80;

// O operador ternário permite uma decisão compacta
// condição ? valor_se_verdadeiro : valor_se_falso

$resultado = ($frequencia >= 75) ? "Frequência suficiente" : "Frequência insuficiente";

echo $resultado;

?>