<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Operadores Aritméticos
    </title>
</head>
<body>
<div>
    <?php
        $n1 = 3;
        $n2 = 2;
        echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ". ($n1+$n2);
        echo "<br>A subtração vale ". ($n1-$n2);
        echo "<br>A Multiplicação vale ". ($n1*$n2);
        echo "<br>A Divisão vale ". ($n1/$n2);
        echo "<br>O Modulo vale ". ($n1%$n2);
        echo "<br>A Média vale $m";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ". ($n1+$n2);
        echo "<br>A subtração vale ". ($n1-$n2);
        echo "<br>A Multiplicação vale ". ($n1*$n2);
        echo "<br>A Divisão vale ". ($n1/$n2);
        echo "<br>O Modulo vale ". ($n1%$n2);
        echo "<br>A Média vale $m";
    ?>
</div
</body>
</html>
</DOCTYPE>