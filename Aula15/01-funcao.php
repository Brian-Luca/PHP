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
        function teste(&$x){
            $x+= 2;
            echo "<p>O valor de X é $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div
</body>
</html>
</DOCTYPE>