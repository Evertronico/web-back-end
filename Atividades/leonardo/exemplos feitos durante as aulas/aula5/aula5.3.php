<?php
// dados simulando um sistema de acesso
$idade = 69;
$ingressoPago = true;

//opredaor logigo and = &&

$entradaPermitida = ($idade >= 18) && ($ingressoPago == true);

echo "<h2>controle de entrada</h2>";
echo "idade :  $idade<br>";
echo "ingresso pago : ";
var_dump($ingressoPago);
echo "entrada permitida <br>";
var_dump($entradaPermitida);

?>