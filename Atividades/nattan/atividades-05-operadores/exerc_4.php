<?php 
// Usei a estrutura logica do exercicio 1

// Variaveis com dados do aluno
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$freqAluno = 85;

// Operador relacional
$mediaAluno = ($nota1 + $nota2 + $nota3) / 3;

if ($mediaAluno >= 7 && $freqAluno >= 75) {
    echo "A média foi " . $mediaAluno . " e a frequência foi " . $freqAluno . ", aluno aprovado.";
} elseif ($mediaAluno >= 5 && $mediaAluno < 7) {
    echo "A média foi " . $mediaAluno . " e a frequência foi " . $freqAluno . ", aluno de recuperação.";
} elseif ($mediaAluno < 5 && $freqAluno < 75) {
    echo "A média foi " . $mediaAluno . " e a frequência foi " . $freqAluno . ", aluno reprovado.";
}