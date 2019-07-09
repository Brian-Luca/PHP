<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Integração HTML5 + PHP
    </title>
    <style>

    </style>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo  "O valor enviado foi $valor e a raiz de $valor é ". number_format($rq, 2);
    ?>
    <br>
    <br>
    <a href="01exercicio.html">Voltar</a>
</div
</body>
</html>
</DOCTYPE>