<?php
// Exemplo de URL para teste:
//mds eu conseguifeaeafjmkae
// ?variavel=100
$variavel = $_GET['variavel'] ?? 'variavel';

echo "<h1>Valor numerico</h1>";
echo ($variavel);

echo "<hr>";
$variavel = "$variavel";
echo "<h1>Novo valor textual</h1>";
var_dump($variavel);
?>