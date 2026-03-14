<?php

$nota1 = 6;
$nota2 = 5;
$nota3 = 9;
$frequencia = 80;

$media = ($nota1 + $nota2 + $nota3) /3;

if ($media >= 7 && $frequencia >= 75) {
    $resultado = "Aprovado";

}
elseif ($media >= 5 && $media < 7) {
    $resultado = "Recuperação";

}
else {
    $resultado = "Reprovado";
}

echo "Média". $media . "<br>";
echo "frequencia". $frequencia. "%<br>";
echo "Resultado". $resultado;

?>

