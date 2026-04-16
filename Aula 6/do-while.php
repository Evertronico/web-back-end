<?php

// Variável de controle
$numero = 10;

// O bloco será executado ao menos uma vez, mesmo que a condição seja falsa
do {

    echo "Número atual: $numero <br>";

    // Incremento
    $numero++;

} while ($numero < 10); // condição será falsa após a primeira execução

?>