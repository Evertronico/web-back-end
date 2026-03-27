<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>integração html e php</title>
</head>
<body>
    <?php
        //o php ´r responsavel pela logica e decisão
        //o html define a estrutura visual da pagina

        //variavel que representa um estado do sistema
        //echo"<pre>";print_r($_GET('modo') == true);die;
        $usuarioLogado = $_GET['modo'] == 'true';
        
        //estrutura condicional simples
        //permite ao php decidir qual conteudo html será exibido
        if($usuarioLogado == true){
            echo"<h2>bem vindo ao sistema</h2>";
            echo"<p>acesso autorizado</p>";
        }else{
            echo"<h2>NÃO bem vindo ao sistema</h2>";
            echo"<p>acesso NÃO autorizado</p>";
        }
    ?>
</body>
</html>