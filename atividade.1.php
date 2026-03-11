<?php
//usei como base o exemplo anterior sim
//variaveis representando dados de um aluno
$notaA = 5.0;
$notaB = 1.0;
$notaC = 7.0;
$notaMinima = 7.0;

//logica de aprovação
$notaAluno = ($notaA  + $notaB + $notaC) / 3;
$aprovado = $notaAluno >= $notaMinima;

//mortrar resultados
echo "<h2>resultado</h2>";
echo "nota do aluno $notaAluno<br>";
if ($aprovado){
    echo "$notaAluno passsa <br>";
} else {
    echo "$notaAluno reprovado <br>";
}
?>