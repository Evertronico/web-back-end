<?php

$numeros = [2,4,3,2,4,5,6,8,8];
$soma = 0;

foreach($numeros as $valor) {
    $soma += $valor;
}
echo "Soma Total. $soma";
?>