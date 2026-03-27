<?php

//arreia associativo (== dicionario no pytonba )representa dados de peoples
$usuario = [
    'nome' => 'ana',
    'idae' => 123,
    'email' => 'o_ana_julia_aaa_o_ana_julia_aaa@julia.com'
];

echo "se liga no doxing da otaria que colocou seus dados no eca digital <br>";

//foreach (vara cada ooo vai falando do ingres do pai aki)percorre cada elemento do aray aso
// cahve = indice, valor = valor do indice

foreach ($usuario as $chave => $valor){
    echo "$chave : $valor <br>";

}