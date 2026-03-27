<?php

//versao mais facil
$produto =[
    "nome" => "carro",
    "valor" => 100000,
    "quantidade" => 2,
];

foreach($produto as $chave => $valor){
    echo "{$chave} : {$valor} <br>";
}