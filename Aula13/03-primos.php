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
        $n = isset($_GET["n"])?$_GET["n"]:1;
        echo "<h2>Analisando o número $n...</h2>";
        echo "<span class='foco' style='font-size: 28px'>Valores múltiplos: </span>";
        $c = 0;
        for ($t = 1; $t <= $n;$t++){
            $r = $n % $t;
            if($r == 0){
                echo "<span style='font-weight: bold;'>$t, </span>";
                $c++;
            }
        }
        echo "<br><br><span class='foco' style='font-size: 28px'>Total de Múltiplos: </span>$c";
        if ($c == 2){
            echo "<h2>Resultado: $n <span class='foco'>É PRIMO!</span></h2>";
        }
        else{
            echo "<h2>Resultado: $n <span class='foco'>NÃO É PRIMO!</span></h2>";
        }
    ?>
    <br><br>
    <a href="03-numeros.php " class="botao">Voltar</a>
</div
</body>
</html>
</DOCTYPE>