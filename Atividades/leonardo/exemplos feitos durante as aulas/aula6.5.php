<?php

// simulação de um sistema de avaliação de um estudante
$nota1 = 5.0;
$nota2 = 5.0;
$nota3 = 5.0;

// calculando a média
$media = ($nota1 + $nota2 + $nota3) / 3;

//determina a frequencia do estudante
$frequencia = 82.5;

// estrutura condicional combinando multiplos critérios
if ($media >= 6 && $frequencia >= 75) {
    echo "Aaprovado!";
} elseif ($media >= 2 && $frequencia < 75) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}


?>