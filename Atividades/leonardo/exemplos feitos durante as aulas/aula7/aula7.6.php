<?php

$alunos = [
    ['nome' => 'joao', 'nota' => 7.5],
    ['nome' => 'maria', 'nota' => 9.0],
    ['nome' => 'pedro', 'nota' => 5.0],
    ['nome' => 'ana', 'nota' => 8.0],
    ['nome' => 'carlos', 'nota' => 6.5]
];

foreach($alunos as $aluno){
    if($aluno['nota'] >= 7.0){
        echo "<p>{$aluno['nome']} foi aprovado com nota {$aluno['nota']}</p>";
    } else {
        echo "<p>{$aluno['nome']} foi reprovado com nota {$aluno['nota']}</p>";
    }
}