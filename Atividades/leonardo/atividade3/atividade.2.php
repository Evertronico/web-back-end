<?php
$notas = [2.8, 6.4, 5.9, 5.1, 1.1];

$soma = 0;

foreach($notas as $nota){
    $soma += $nota;
};

$media = $soma / count($notas);
echo"média $media";