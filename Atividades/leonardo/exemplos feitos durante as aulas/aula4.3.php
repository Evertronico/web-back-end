<?php
// Exemplo de URL para teste:
// ?nome=Leonardo&idade=15&mediaFinal=6.15

$nome = $_GET['nome'] ?? 'Aluno';
$idade = isset($_GET['idade']) ? (int) $_GET['idade'] : 0.0;
$mediaFinal = isset($_GET['mediaFinal']) ? (float) $_GET['mediaFinal'] : 0.0;

$aprovado = FALSE;
if ($mediaFinal >= 7) {
    $aprovado = TRUE; 
}

// Saída estruturada em HTML
echo "<h1>SItuação do aluno</h1>";
echo "<p>Aluno: $nome</p>";
echo "<p>Idade: $idade</p>";
echo "<p>Média final: " . ($mediaFinal) . "</p>";
echo "<p>Aprovado: " . ($aprovado ? "Sim" : "Não") . "</p>";

// Exibição técnica para análise de tipos e estrutura
echo "<hr>";
echo "<h3>Inspeção das Variáveis</h3>";
echo "<pre>";
var_dump($nome, $idade, $mediaFinal, $aprovado);
echo "</pre>";
?>