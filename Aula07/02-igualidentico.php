<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Operadores Relacionais
    </title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $i = $a == $b ? "Igual" : "Diferente";
        $d = $a == $b ? "a" : "de";
        echo "$a é $i $d $b<br>";
        $id = $a === $b ? "Idêntico" : "Diferente";
        $de = $a === $b ? "a" : "de";
        echo "$a é $id $de $b";
    ?>
</div
</body>
</html>
</DOCTYPE>