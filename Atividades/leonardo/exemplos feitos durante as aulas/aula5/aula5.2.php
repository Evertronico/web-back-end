<?php
//variaveis representando dados de um aluno
$notaAluno = 5.0;
$notaMinima = 6.0;

//operador relacional
$aprovado = $notaAluno >= $notaMinima;

//var_dump = ver resultado booleano da esprecao

echo "<h2>resultado</h2>";
echo "nota do aluno $notaAluno<br>";
echo "nota minima $notaMinima<br>";
echo "o aluno foi aprovado ?";

var_dump($aprovado);
?>