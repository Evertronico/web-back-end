<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atividade Slide 2 - Hora </title>
</head>
<body>

<?php

$nome = "luann";
$hora = date('H');

if ($hora < 12) {
    echo "<h1>Bom dia $nome.</h1>";
}
elseif ($hora < 18) {
    echo "<h1>Boa Tarde $nome.</h1>";

}
else {
    echo "<h1>Boa Noite $nome.</h1>";

}

?>

</body>
</html>
