<?php

// Função para calcular total de um carrinho
function calcularTotalCarrinho($produtos) {

    $total = 0;

    foreach ($produtos as $produto) {

        // Cálculo por item
        $totalItem = $produto["preco"] * $produto["qtd"];

        // Acumulação
        $total += $totalItem;
    }

    return $total;
}

// Função para aplicar desconto
function aplicarDesconto($total) {

    // Regra de negócio
    if ($total > 500) {
        return $total * 0.9;
    }

    return $total;
}

// Dados simulados
$carrinho = [
    ["nome" => "Notebook", "preco" => 3000, "qtd" => 1],
    ["nome" => "Mouse", "preco" => 100, "qtd" => 2]
];

// Uso das funções (modularização)
$total = calcularTotalCarrinho($carrinho);
$totalFinal = aplicarDesconto($total);

echo "Total com desconto: R$ $totalFinal";

?>