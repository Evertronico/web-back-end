<?php
// Este script demonstra como capturar e processar dados enviados pela URL
// utilizando o array superglobal $_GET.

// Exemplo de URL para teste:
// http://localhost/exemplo.php?nome=Ana&valor=1500&desconto=0.15&vip=1

// O operador ?? (null coalescing) evita erro caso o parâmetro não exista.
// Se o índice não estiver definido, será atribuído um valor padrão.

$nome = $_GET['nome'] ?? 'Cliente';
$valor = isset($_GET['valor']) ? (float) $_GET['valor'] : 0.0;
$desconto = isset($_GET['desconto']) ? (float) $_GET['desconto'] : 0.0;
$vip = isset($_GET['vip']) ? (bool) $_GET['vip'] : false;

// Cálculo do valor final aplicando desconto
$valorFinal = $valor - ($valor * $desconto);

// Aplicação de benefício adicional para cliente VIP
if ($vip) {
    $valorFinal *= 0.95; // 5% adicional para clientes VIP
}

// Saída estruturada em HTML
echo "<h1>Resumo da Compra via URL</h1>";
echo "<p>Cliente: $nome</p>";
echo "<p>Valor original: R$ $valor</p>";
echo "<p>Desconto aplicado: " . ($desconto * 100) . "%</p>";
echo "<p>Cliente VIP: " . ($vip ? "Sim" : "Não") . "</p>";
echo "<p><strong>Valor final: R$ $valorFinal</strong></p>";

// Exibição técnica para análise de tipos e estrutura
echo "<hr>";
echo "<h3>Inspeção das Variáveis</h3>";
echo "<pre>";
var_dump($nome, $valor, $desconto, $vip, $valorFinal);
echo "</pre>";
?>