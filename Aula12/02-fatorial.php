<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>

    </title>
    <style>

    </style>
</head>
<body>
<div>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:0;
        $c = $v;
        $fat = 1;
        do{
            $fat *= $c;
            $c--;
        }while($c>0);
        echo "<h2>$v = $fat</h2>";
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div
</body>
</html>
</DOCTYPE>