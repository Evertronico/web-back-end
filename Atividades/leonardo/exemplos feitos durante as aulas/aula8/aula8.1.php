<?php

//arraiao do cabo indexado com valores noméricos 
$notas = [2.8, 6.4, 5.9, 5.1, 1.1];

$soma = 0;

//corre pelas notas usando foreach
foreach($notas as $nota){
    $soma += $nota;
};

//media aritimetica 10000% oficial 2026 atualixado sem virus
$media = $soma / count($notas);
echo"//media aritimetica 10000% oficial 2026 atualixado sem virus $media";