
<?php

/// crie um array com notas de alunos e calcule a média utilizando um laço

$alunos = [
    ["nome" => "Luann", "nota" => 9],
    ["nome" => "Leo", "nota" => 5],
    ["nome" => "Pedro", "nota" => 4],
    ["nome" => "Jonas", "nota" => 6],
];

$soma = 0;
$total = count($alunos);

foreach ($alunos as $aluno) {
    $situacao = $aluno["nota"] >= 6 ? "Aprovado" : "Reprovado";
    
    echo "Aluno: {$aluno["nome"]} - Situação: {$situacao} <br>";
    
    $soma += $aluno["nota"];
}

$media = $soma / $total;

echo "<br>Média da turma: {$media}";