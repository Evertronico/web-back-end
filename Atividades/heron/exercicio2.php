<?php

$notas = [7, 8, 6, 9, 5];

$soma = 0;

foreach ($notas as $nota) {
    echo "Nota: $nota <br>";
    $soma += $nota;
}

$media = $soma / count($notas);

echo "<br>Média: $media";

?>