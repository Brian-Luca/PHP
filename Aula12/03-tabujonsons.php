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
        $v = isset($_GET["tab"])?$_GET["tab"]:1;
        echo "<h1>Mostrando a Tabuada de $v</h1>";
        $c = 1;
        do{
            $calc = $v * $c;
            echo "$v x $c = $calc<br>";
            $c++;
        }while($c<=10);
    ?>
    <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
</div
</body>
</html>
</DOCTYPE>