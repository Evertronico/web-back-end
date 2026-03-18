<?php

$nota1 = 5;
$nota2 = 8;
$nota3 = 3;

$media = ($nota1 + $nota2 + $nota3) /3;

echo "Média :" . $media;

if ($media) {
    echo "Aprovado";
}else
    echo "Reprovado";


?>