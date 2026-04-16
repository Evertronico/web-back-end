<?php

// array multidimensional representando alunos e suas notas
$alunos = [
    ["nome" => "Carlos", "nota" => 7],
    ["nome" => "Ana", "nota" => 5],
    ["nome" => "João", "nota" => 9],
    ["nome" => "Maria", "nota" => 8]
];

foreach ($alunos as $aluno) {
    // aplica a regra de negócio
    $situacao = $aluno["nota"] >= 7 ? "Aprovado" : "Reprovado";

    echo "Aluno: {$aluno["nome"]} - Situação: {$situacao} <br>";
}