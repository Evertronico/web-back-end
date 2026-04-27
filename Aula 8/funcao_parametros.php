<?php

// Função que recebe parâmetros e utiliza na lógica
function exibirUsuario($nome, $idade) {

    // Concatenação de valores
    echo "Usuário: $nome - Idade: $idade <br>";
}

// Chamadas com diferentes argumentos
exibirUsuario("Carlos", 30);
exibirUsuario("Ana", 25);

?>