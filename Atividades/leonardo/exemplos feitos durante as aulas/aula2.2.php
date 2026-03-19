<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php e gtml</title>
</head>
<body>
    <h1>página derada dinamicamente</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");

        $hora = date("H");
        
        if ($hora < 12){
            echo "<p>bom dia</p>";
        } else {
            echo "<p>boa tarde</p>";
        }
    ?>
</body>
</html>