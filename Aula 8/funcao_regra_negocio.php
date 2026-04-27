<?php

// Função que determina situação do aluno
function verificarSituacao($media) {

    // Estrutura condicional dentro da função
    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

// Execução combinada
$media = 6.5;
$situacao = verificarSituacao($media);

echo "Situação: $situacao";

?>