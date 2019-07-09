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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $txt = "O dobro de <span class='foco'>$n</span> é: ";
                $r = $n * 2;
                break;
            case 2:
                $txt = "O cubo de <span class='foco'>$n</span> é: ";
                $r = pow($n, 3);
                break;
            case 3:
                $txt = "A raiz quadrada de <span class='foco'>$n</span> é: ";
                $r = sqrt($n); // pow($n, 3);
        }
        echo "$txt <span class='foco'>$r</span>";
    ?>
    <br><br>
    <a href="exercicio01.html" class="botao">Voltar</a>
</div
</body>
</html>
</DOCTYPE>