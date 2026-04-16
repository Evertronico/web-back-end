<?php
$nome = "Gabriel Pedrosa";
$curso = "Análise e Desenvolvimento de Sistemas FASM 3* periodo";

date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y');
?>

<h1>Informações do Estudante</h1>

<p><strong>Nome:</strong> <?php echo $nome; ?></p>
<p><strong>Curso:</strong> <?php echo $curso; ?></p>
<p><strong>Data atual:</strong> <?php echo $dataAtual; ?></p>

<hr>

<?php
echo "<p><em>Pagina processada pelo servidor em " . $dataAtual . " às " . date('H:i:s') . "</em></p>";
?>
