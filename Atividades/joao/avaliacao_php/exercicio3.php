<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <body>
<?php

$nomeAluno = "João";
$nota = "8.5";
$validacao = ($nota >= 0) ? "Nota válida" : "Nota inválida";

if ($nota >=7) {
    $status = "Aprovado!";
} elseif ($nota >= 5 && $nota <= 6.9) {
    $status = "Recuperação!";
} else ($nota < 5) {
    $status = "Reprovado!";
}

echo "<h1>Exame do aluno</h1>";
echo "<p>A nota do $nomeAluno foi $nota. $status!</p>";
?>

</body>
</html>