<?php
$nome = $_GET['nome'] ?? 'Visitante';
echo "<h2>Bem-vindo, $nome!</h2>";
echo "<p>Esta resposta foi gerada após o processamento da requisição.</p>";
?>
