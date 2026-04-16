<?php
// Boa prática: separar lógica de dados e apresentação sempre que possível.

// Variáveis que representam dados do sistema
$nomeUsuario = "Carlos";
$perfil = "Administrador";

// Lógica responsável por montar a mensagem
$mensagem = "Usuário: $nomeUsuario | Perfil: $perfil";

// Apresentação do resultado final
echo "<div>";
echo "<h2>Informações do Usuário</h2>";
echo "<p>$mensagem</p>";
echo "</div>";
?>
