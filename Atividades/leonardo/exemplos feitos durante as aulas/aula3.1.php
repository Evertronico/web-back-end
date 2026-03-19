<?php

# contarios feitos com # ou // ou /**/
// introdução a boas praticas de de programação - separacção logica de dados e apresentação

/*variaveis que representão os dados do sistema*/
$nomeUsuario = "fulano de tal";
$perfil = "balaco baco";

// logica responsavel por mantar uma mensagem que sera impressa na tela
$mensagem = "usuario: $nomeUsuario | perfil: $perfil";

// apresentacão do resultado na tela
echo"<div>";
echo"<h1>informações do usuario</h1>";
echo"<p>$mensagem</p>";
echo"</div>";

?>