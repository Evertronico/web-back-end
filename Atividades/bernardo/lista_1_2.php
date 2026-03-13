<?php 

$idade = 18;
$cadastroAtivo = true;

if ($idade >= 18 && $cadastroAtivo == true) {
    $entradaPermitida = true;
}else {
    $entradaPermitida = false;
}

echo "<h2>Controle de entrada</h2>";
echo "Idade: $idade<br>";
echo "Cadastro ativo: ";
var_dump($cadastroAtivo);
echo "Entrada permitida?<br>";
var_dump($entradaPermitida);

?>