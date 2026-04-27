<?php

// Parâmetro com valor padrão
function calcularPrecoFinal($preco, $desconto = 0) {

    // Aplicação do desconto percentual
    $valorFinal = $preco - ($preco * ($desconto / 100));

    return $valorFinal;
}

// Diferentes formas de uso
echo calcularPrecoFinal(1000, 10) . "<br>"; // com desconto
echo calcularPrecoFinal(500) . "<br>";      // sem desconto

?>