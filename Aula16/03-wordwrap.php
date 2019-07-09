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
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
        $r = wordwrap($t, 20, "<br>\n", true);
        echo $r;
        echo "<br>";
        echo strlen($t);
    ?>
</div
</body>
</html>
</DOCTYPE>