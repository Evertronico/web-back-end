<?php

$av1 = 4;
$av2 = 9;
$av3 = 5;

$taxaPresenca = 80;

$mediaFinal = ($av1 + $av2 + $av3) / 3;

if ($mediaFinal >= 7 && $taxaPresenca >= 75) {
    $situacaoAluno = "Aprovado";

} elseif ($mediaFinal >= 5 && $taxaPresenca >= 75) {
    $situacaoAluno = "Recuperação";

} else {
    $situacaoAluno = "Reprovado";
}

echo "Média Final: " . number_format($mediaFinal, 1, ',', '.') . "<br>";
echo "Frequência: " . $taxaPresenca . "%<br>";
echo "Situação do Aluno: <strong>" . $situacaoAluno . "</strong>";

?>