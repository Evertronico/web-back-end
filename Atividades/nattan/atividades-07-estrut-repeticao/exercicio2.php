<?php

// lista de nomes em um array associativo
$alunos = [
    ['nome' => 'Nattan', 'idade' => 18],
    ['nome' => 'Kayki', 'idade' => 21],
    ['nome' => 'Heron', 'idade' => 20],
    ['nome' => 'Paulo', 'idade' => 21],
    ['nome' => 'Arthur', 'idade' => 19]
];

echo "<table border='1'>";
echo "<tr><td>Produto</td><td>Preço</td></tr>";
foreach ($alunos as $aluno) {
    echo "<tr>";
    echo "<td>{$aluno['nome']}</td>";
    echo "<td>{$aluno['idade']}</td>";
    echo "</tr>";
}