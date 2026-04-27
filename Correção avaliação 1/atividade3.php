<?php
$nome_aluno = "Everaldo";
$nota = 8.5;

// Implementação das regras com if, elseif, else
if ($nota >= 7) {
    $situacao = "Aprovado";
} elseif ($nota >= 5) {
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

// Uso de operador ternário para definição de cor
$cor = ($nota >= 7) ? "blue" : "red";

// Exibição formatada em HTML
echo "<h2>Resultado Final</h2>";
echo "<p>Aluno: $nome_aluno</p>";
echo "<p>Nota: $nota</p>";
echo "<p style='color: $cor;'>Situação: <strong>$situacao</strong></p>";
?>