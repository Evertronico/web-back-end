<?php
// essa parte aki eu usei da aula 4
$idade = isset($_GET['idade']) ? (int) $_GET['idade'] : 0;
$cadastro = isset($_GET['cadastro']) ? (bool) $_GET['cadastro'] : false;
$acesso = false;

//?idade=20&cadastro=true

if ($idade >= 18 && $cadastro){
    $acesso = true;
} else {
    $acesso = false;
}
echo"<h1>tem acesso?</h1>";
echo"dica : tente usar ?idade=20&cadastro=true";
var_dump($acesso);

?> 