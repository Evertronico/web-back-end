<?php

// URL de teste
// http://localhost/exemplo.php?idade=22&ingresso=1

$idade = $_GET['idade'] ?? 0;
$ingresso = $_GET['ingresso'] ?? 0;

// Verificação condicional combinando regras

if ($idade >= 18 && $ingresso == 1) {

    echo "Entrada autorizada.";

} elseif ($idade >= 18 && $ingresso == 0) {

    echo "Entrada negada: ingresso obrigatório.";

} else {

    echo "Entrada proibida: menor de idade.";

}

?>