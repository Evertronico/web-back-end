<?php

// Variáveis representando dados de um aluno

$notaAluno = 7.5;
$notaMinima = 6.0;

// Operador relacional maior ou igual

$aprovado = $notaAluno >= $notaMinima;

// var_dump permite visualizar o resultado booleano da expressão

echo "<h2>Resultado da Avaliação</h2>";

echo "Nota do aluno: $notaAluno <br>";
echo "Nota mínima: $notaMinima <br>";

echo "O aluno foi aprovado? <br>";

var_dump($aprovado);

?>