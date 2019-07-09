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
        echo "<h2>TRIM:</h2>";
        $nome = "   jose da silva   ";
        echo $nome;
        echo strlen($nome). "<br>";
        $novo = trim($nome);
        echo "$novo ";
        echo strlen($novo);
    ?>
</div
</body>
</html>
</DOCTYPE>