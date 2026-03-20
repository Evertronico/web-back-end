<?php

$produtos = [
    ["nome" => "Notebook", "preco" => 800],
    ["nome" => "Teclado", "preco" => 300],
    ["nome" => "Mouse", "preco" => 200],
    ["nome" => "Celular", "preco" => 400],
    ["nome" => "USB", "preco" => 150],

];

echo "<table border= '1'>";
echo "<tr><th>Produto</th><th>Preço</th></tr>";

foreach($produtos as $produtos) {
    $preco = $produtos["preco"];

    if($preco > 100) {
        $descontaso = $preco * 0.10;
        $precoFinalssimo = $preco - $descontaso;
    }else{
        $precoFinalssimo = $preco;
    }
    echo "<tr>";
    echo "<td>".$produto["nome"]."</td>";
    echo "<td>".$preco."</td>";
    echo "<td>".$precoFinalssimo."</td>";
    echo "</tr>";
}
echo "</table>";

?>