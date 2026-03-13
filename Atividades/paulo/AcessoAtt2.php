<?php

$idade = 18;
$cadastroAtivo = true;
if ($idade >= 18 && $cadastroAtivo) {
    echo "Acesso permitido.";
} else {
    echo "Acesso negado.";
}