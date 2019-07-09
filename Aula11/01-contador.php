<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>

    </title>
    <style>
        span{
            transform: translate(99%);
            display: flex;
        }
        span:first-of-type{
            transform: translate(97%)
        }
    </style>
</head>
<body>
<div>
    <?php
        $c = 1;
        while ($c <= 10){
            echo "$c <br>";
            $c++;
        }
        $d = 10;
        while ($d >= 0){
            echo "<span> $d </span>";
            $d -= 2;
        }
    ?>
</div
</body>
</html>
</DOCTYPE>