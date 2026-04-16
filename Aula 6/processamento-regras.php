<?php

// Lista de alunos com notas
$alunos = [
    ["nome" => "Carlos", "nota" => 7],
    ["nome" => "Marina", "nota" => 5],
    ["nome" => "João", "nota" => 9]
];

foreach ($alunos as $aluno) {
    // Aplicação de regra de negócio dentro do laço
    if ($aluno["nota"] >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo "Aluno: {$aluno['nome']} - Situação: $situacao <br>";
}

?>