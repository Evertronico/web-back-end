<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php e html</title>
</head>
<body>
    <h1>página derada dinamicamente</h1>
    <?php
        $nome = $_GET("nome") ?? "visitante";

        date_default_timezone_set("America/Sao_Paulo");

        $hora = date("H");

        if ($hora < 12){
            echo "<p>bom dia, $nome!</p>";
        } else {
            echo "<p>boa tarde, $nome!</p>";
        }
    ?>
</body>
</html>