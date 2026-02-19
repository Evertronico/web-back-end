<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Integração PHP e HTML</title>
</head>
<body>

<?php
// O PHP é responsável pela lógica e decisão.
// O HTML define a estrutura visual da página.

// Variável que representa um estado do sistema
$usuarioLogado = true;

// Estrutura condicional simples
// Permite ao PHP decidir qual conteúdo HTML será gerado
if ($usuarioLogado) {
    echo "<h2>Bem-vindo ao sistema</h2>";
    echo "<p>Acesso autorizado.</p>";
} else {
    echo "<h2>Acesso restrito</h2>";
    echo "<p>Por favor, realize o login.</p>";
}
?>

</body>
</html>
