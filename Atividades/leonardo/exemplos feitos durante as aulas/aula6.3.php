<?php

$nota = 82.2;

//acima de 9 - excelente
//entre 7 e 9 - satisfatório
//abaixo de 7 - recuperação
//abaixo de 5 - reprovado

if ($nota >= 9)  {
    echo "Desempenho Excelente";
} elseif ($nota >= 7) {
    echo "Desempenho Satisfatório";
} elseif ($nota >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}

?>