<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP e HTML</title>
</head>
<body>
    <h1>Página Gerada Dinamicamente</h1>

    <?php
        $hora = date("H");
        if ($hora < 12) {
            echo "<p>Bom dia!</p>";
        } else {
            echo "<p>Boa tarde!</p>";
        }
    ?>
</body>
</html>
