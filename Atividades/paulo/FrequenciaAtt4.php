<?php  
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.0;
$frequencia = 0.75;
$media = ($nota1 + $nota2 + $nota3) / 3;
if ($media <= 5.0 || $frequencia < 0.75) {
    echo "Reprovado! Média: " . number_format($media, 2) . " Frequência: " . ($frequencia * 100) . "%<br>";
} else if ($media >= 5.0 && $media < 7.0 && $frequencia >= 0.75) {
    echo "Recuperação! Média: " . number_format($media, 2) . " Frequência: " . ($frequencia * 100) . "%<br>";
} else {
    echo "Aprovado! Média: " . number_format($media, 2) . " Frequência: " . ($frequencia * 100) . "%<br>";
}