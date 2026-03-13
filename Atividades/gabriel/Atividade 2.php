<?php

$idadeUsuario = 18;
$contaAtivada = true;

$permissaoLiberada = ($idadeUsuario >= 18 && $contaAtivada); 

var_dump($permissaoLiberada);

?>