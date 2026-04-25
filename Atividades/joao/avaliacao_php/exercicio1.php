<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Avaliação Prática - PHP</title>
</head>
<?php
$nomeAluno = "Bil";
$curso = "Sistemas";
$produtoNome = "Teclado";
$precoUnitario = "189.90";
$quantidade = "8";

$dataAtual = date ("d/m/y");

$valorTotal = $precoUnitario * $quantidade;

$statusEstoque = ($quantidade > 0) ? "Disponível" : "Esgotado";

echo "<h1>Relatório de venda</h1>";
echo "<p><strong>Aluno:</strong> $nomeAluno | <strong><Curso:<strong> $curso<p>";
echo "<p><strong>Data:</strong> $dataAtual</p>";

echo "<div class='comprovante'>";
    echo "<h2>Dados do Pedido</h2>";
    echo "Produto: $produtoNome <br>";
    echo "Preço: $precoUnitario <br>";
    echo "<strong>Total: R$ $valorTotal</trong> <br>";
    echo "Status: $statusEstoque";
echo "</div>";

echo "<hr>";
echo "<h3>Debud de tipos (var_dump):</h3>";
echo "<pre>";
var_dump($precoUnitario);
var_dump($valorTotal);
echo "</pre>";
?>

</body>
</html>