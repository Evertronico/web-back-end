<?php   

$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.0;
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7.0) {
    echo "Aprovado! Média: " . number_format($media, 2);
} else {
    echo "Reprovado! Média: " . number_format($media, 2);
}