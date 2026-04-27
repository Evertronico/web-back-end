<?php
$nome = "Everaldo"; 
$curso = "Análise e Desenvolvimento de Sistemas";
$data_atual = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1 - PHP</title>
</head>
<body>
    <h1>Dados do Estudante</h1>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Curso:</strong> <?php echo $curso; ?></p>
    <p><strong>Data de Acesso:</strong> <?php echo $data_atual; ?></p>
</body>
</html>