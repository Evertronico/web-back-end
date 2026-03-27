<?php

// Array multidimensional representando alunos
$alunos = [
    ["nome" => "Carlos", "nota" => 7],
    ["nome" => "Ana", "nota" => 5],
    ["nome" => "João", "nota" => 9]
];

foreach ($alunos as $aluno) {

    // Aplicação de regra de negócio
    $situacao = ($aluno["nota"] >= 7) ? "Aprovado" : "Reprovado";

    echo "Aluno: {$aluno['nome']} - Situação: $situacao <br>";
}

?>