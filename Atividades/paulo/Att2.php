<?php

$notas = [4.5, 2.0, 7.5, 9.0, 6.0, 8.5];


$soma = 0;


foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas); 
echo "A média das notas é: " . $media;
