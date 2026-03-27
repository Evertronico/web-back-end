<?php

//url de teste
// http://localhost/aula6.6.php?idade=19&ingresso=1

$idade = $_GET['idade'] ?? 0; //se nao passar nada a idade é 0
$ingresso = $_GET['ingresso'] ?? 0; //se nao passar nada o ingresso é 0

if ($idade >= 18 && $ingresso == 1) {
    echo "pode entra";
} elseif ($idade >= 18 && $ingresso == 0) {
    echo "nao pode entra pq nao tem ingresso";
} else {
    echo "nao pode entra pq nao tem 18 anos";
}

?>