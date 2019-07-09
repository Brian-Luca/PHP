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
        $frase = "Gosto de estudar Matemática!!<br>";
        $novaFrase = str_replace("Matemática","PHP",$frase);
        print $novaFrase;
        $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
        $novaFrase = str_ireplace("matemática","CSS",$frase);
        print $novaFrase;
    ?>
</div
</body>
</html>
</DOCTYPE>