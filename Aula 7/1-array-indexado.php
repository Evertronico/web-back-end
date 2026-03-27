<?php

// Array indexado com valores numéricos
$notas = [7.5, 8.0, 6.5, 9.0];

// Variável para acumular soma
$soma = 0;

// Percorrendo o array com foreach
foreach ($notas as $nota) {

    // Soma progressiva dos valores
    $soma += $nota;
}

// Cálculo da média
$media = $soma / count($notas);

// Exibição dos resultados
echo "Média das notas: $media";

?>