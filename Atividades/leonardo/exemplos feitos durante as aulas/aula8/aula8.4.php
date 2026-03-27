<?php

//arraial multidimencional representando alunos e notas

$alunos = [
    ["nome" => "maria", "nota" => 2],
    ["nome" => "ana", "nota" => 4],
    ["nome" => "Deus", "nota" => 6],
    ["nome" => "leo", "nota" => 8],
    ["nome" => "everaldo", "nota" => 10]
];

foreach($alunos as $aluno){
    //regra de negociozinhos
    $situacao = $aluno["nota"] >= 7 ? "Aprovado" : "Reprovado";

    echo "Aluno: {$aluno["nome"]} - Situação: {$situacao} <br>";
}