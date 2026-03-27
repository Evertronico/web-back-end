<?php

//versao mais facil
$usuario =[
    "nome" => "leonardo 3p ads fasm",
    "idade" => 19,
    "github" => "linusard-hub",
    "motivacao" => "conseguir um estagio",
    "desempregado" => "sim"
];

foreach($usuario as $chave => $valor){
    echo "{$chave} : {$valor} <br>";
}