<?php

$notas = [7.5, 8.0, 6.5, 9.0, 5.5];
$soma = 0;
foreach ($notas as $nota) {
    $soma += $nota;
}
$media = $soma / count($notas);
echo "Média: " . $media;

?>