<?php

//arraial associativosinho / cahve => valor
$usuario =[
    "nome" => "leonardo 3p ads fasm",
    "idade" => 19,
    "github" => "linusard-hub",
    "motivacao" => "conseguir um estagio",
    "desempregado" => true
];

//acessar valores usando ac cahves da nilce do cade a chave
echo "nome: " . $usuario["nome"] . "<br>";
echo "idade: " . $usuario["idade"] . "<br>";
echo "git-hub: " . $usuario["github"] . "<br>";
echo "meta: " . $usuario["motivacao"] . "<br>";
echo "desempregado: " . ($usuario["desempregado"] ? "sim" : "não");