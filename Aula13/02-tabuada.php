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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c = 1; $c <= 10; $c++){
            $r = $n * $c;
            echo "$n x $c = $r<br>";
        }
    ?><br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>