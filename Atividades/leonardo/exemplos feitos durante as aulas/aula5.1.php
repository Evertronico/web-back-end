<?php

//declaração de variaveis numericas
//php utiliza tipagem dinãmica

$precoProduto = 150.00;
$quantidade = 3;
$descontoPercentual = 10/100;

//multiplicaçao para o valor bruto

$valortotal = $precoProduto * $quantidade;

//suvtração para aplicar o desconto 
$valorComDesconto = $valortotal - ($valortotal * $descontoPercentual);

//saida de dados
echo "<h2>Calculo de compra</h2>";
echo "preço do produto : R$ $precoProduto <br>";
echo "quantidade : $quantidade <br>";
echo "valor total : R$ $valortotal <br>";
echo "valor com desconto : R$ $valorComDesconto";

?>