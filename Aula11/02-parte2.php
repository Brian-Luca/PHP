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
        $c = 1;
        while ($c<=5) {
            $v = "num$c";
            $url = "v$c";
            $$v = isset($_GET["$url"])?$_GET["$url"] : "Não definido";
            $c++;
        }
        $c = 1;
        while ($c<=5) {
            $v = "num$c";
            echo "O valor $c é ".$$v."<br>";
            $c++;
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)" class="botao">
        Voltar
    </a>
</div
</body>
</html>
</DOCTYPE>