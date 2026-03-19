<?php

// Inicialização da variável de controle
$contador = 1;

// O laço será executado enquanto a condição for verdadeira
while ($contador <= 5) {

    // Exibição do valor atual
    echo "Iteração: $contador <br>";

    // Incremento da variável para evitar loop infinito
    $contador++;
}

?>