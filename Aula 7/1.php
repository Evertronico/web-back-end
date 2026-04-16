<?php
// array indexado com valores numéricos (notas)
$notas = [7.5, 8.0, 6.5, 9.0];

// variável para calcular a soma das notas
$soma = 0;

// percorre as notas usando um foreach
foreach ($notas as $nota) {
    $soma += $nota;
}

// calcula a média
$media = $soma / count($notas);
echo "Média : {$media}";