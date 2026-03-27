<?php
echo "<h2>Exercício 2 – Processamento de Notas</h2>\n";

$notas = [8.5, 7.0, 9.2, 6.5, 10.0];
$soma = 0;

echo "Notas do aluno: " . implode(", ", $notas) . "<br><br>\n";

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "<strong>Média:</strong> " . number_format($media, 2, ',', '.') . "\n";
?>
