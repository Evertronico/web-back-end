<?php

// Função que calcula média e retorna resultado
function calcularMedia($notas) {

    $soma = 0;

    // Percorrendo array
    foreach ($notas as $nota) {
        $soma += $nota;
    }

    // Retornando valor calculado
    return $soma / count($notas);
}

// Uso da função
$media = calcularMedia([7, 8, 9]);

echo "Média: $media";

?>