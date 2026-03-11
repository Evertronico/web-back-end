<?php

$compra = 800;
$vip = isset($_GET['vip']) ? (bool) $_GET['vip'] : false;
$desconto = 0;

if ($compra > 500){
    $desconto = $desconto + 10;
}

if ($vip){
    $desconto = $desconto + 5;
}

$compraComDesconto = $compra - ($compra * ($desconto / 100));

echo"<h1>compras</h1>";
echo"valor da compra: R$ $compra<br>";
echo"cliente vip: " . ($vip ? 'sim' : 'nao');
var_dump($vip);
echo"valor final: R$ $compraComDesconto";

// a eutra atividade era pratica, vc não pediu para enviar, so fazer para praticar em casa
?>