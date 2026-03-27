<?php

$notas = [7.5, 8.0, 6.0, 9.5, 5.0];

foreach ($notas as $nota) {
    $media += $nota / count($notas);
    echo "Nota: $nota, Média: $media\n";
}