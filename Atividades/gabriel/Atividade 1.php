<?php

$n1 = 5;
$n2 = 8;
$n3 = 3;

$resultadoFinal = ($n1 + $n2 + $n3) / 3;

echo "Sua média final é: " . number_format($resultadoFinal, 2) . "<br>";

if ($resultadoFinal >= 6) {
    echo "Status: Aprovado";
} else {
    echo "Status: Reprovado";
}

?>