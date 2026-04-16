<?php

$nomeAluno = "Gabriel Pedrosa";
$nota = 8.5;

$notaValida = ($nota >= 0 && $nota <= 10) ? "Sim" : "Não";

echo "<h1>Avaliação de Aluno</h1>\n";
echo "<p><strong>Aluno:</strong> $nomeAluno</p>\n";
echo "<p><strong>Nota:</strong> " . number_format($nota, 1) . "</p>\n";
echo "<p><strong>Nota válida:</strong> $notaValida</p>\n";

echo "<hr>\n";

if ($nota >= 7) {
    $situacao = "Aprovado";
} elseif ($nota >= 5) {
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

echo "<h2>Resultado: <strong>$situacao</strong></h2>\n";

if ($situacao == "Aprovado") {
    echo "<p>Parabéns, $nomeAluno! Você foi aprovado com nota " . number_format($nota, 1) . ".</p>\n";
} elseif ($situacao == "Recuperação") {
    echo "<p>$nomeAluno, você está em recuperação. Estude mais para a próxima!</p>\n";
} else {
    echo "<p>$nomeAluno, infelizmente você oce foi reprovado :(. Procure teu professor.</p>\n";
}

?>
