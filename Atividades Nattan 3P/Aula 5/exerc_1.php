<?php 
// Usei a estrutura logica que estava em outros exemplos do slide da Aula 5.

// Variaveis com dados do aluno
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$notaMinima = 7;

// Operador relacional
$mediaAluno = ($nota1 + $nota2 + $nota3) / 3;
$aprovado = ($mediaAluno >= $notaMinima);

if ($aprovado) {
    echo "A média foi " . $mediaAluno . ", aluno aprovado.";
} else {
    echo "A média foi " . $media . ", aluno de recuperação.";
}