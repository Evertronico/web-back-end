<?php

$notaAlunoPri = 5.0;
$notaAlunoSeg = 6.0;
$notaAlunoTer = 8.0;

$notaAlunoMedia = ($notaAlunoPri + $notaAlunoSeg + $notaAlunoTer) / 3;
$notaMinima = 7.0;

$aprovado = $notaAlunoMedia >= $notaMinima;

echo "<h2>Resultado da avaliação</h2>";
echo "Nota media do aluno: $notaAlunoMedia<br>";
echo "Nota do mínima: $notaMinima<br>";
echo "O aluno foi aprovado?<br>";
if ($notaAlunoMedia >= $notaMinima) {
    $aprovado = true 
    echo "O aluno foi aprovado!";
} else {
    $aprovado = false
    echo "O aluno não foi aprovado!";
}

?>