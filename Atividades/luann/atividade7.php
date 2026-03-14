<?php

$nome = "Luann";
$valorCompra = 200;
$desconto = 10;
$vip = true;

$valorFinal = $valorCompra - ($valorCompra * $desconto / 200);

?>

<h2>Resumo da Compra do Luann </h2>

<p>Nome: <?php echo $nome; ?></p>
<p>Valor da compra: <?php echo $valorCompra; ?></p>
<p>Desconto : <?php echo $desconto; ?>%</p>
<p>Cliente VIP : <?php echo $vip ? "Sim" : "Não"; ?></p>
<p>Valor final : <?php echo $valorFinal; ?></p>

<?php
var_dump($valorCompra);
?>



