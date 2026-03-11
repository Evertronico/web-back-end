<?php

// Simulação de sistema acadêmico

$nota1 = 7;
$nota2 = 6;
$nota3 = 8;
$frequencia = 78;

// Cálculo da média utilizando operadores aritméticos

$media = ($nota1 + $nota2 + $nota3) / 3;

// Estrutura condicional combinando múltiplos critérios

if ($media >= 7 && $frequencia >= 75) {

    $situacao = "Aluno aprovado";

} elseif ($media >= 5 && $frequencia >= 75) {

    $situacao = "Aluno em recuperação";

} else {

    $situacao = "Aluno reprovado";

}

// Exibição dos resultados

echo "<h2>Resultado Acadêmico</h2>";

echo "Média: $media <br>";
echo "Frequência: $frequencia% <br>";
echo "Situação: $situacao";

?>