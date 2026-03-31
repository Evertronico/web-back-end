<?php

// array indexado com valores numericos (notas)
$notas = [
    7.5, 
    8.0, 
    6.5, 
    9.0,
    10,
    1.0,
    5.6,
    6.0
];

// variavel para calcular a soma das notas
$soma = 0;

// percorre as notas usando um foreach
foreach ($notas as $nota) {
    $soma += $nota;
}

// calcula a media
$media = $soma / count($notas);
echo "Media : {$media}";