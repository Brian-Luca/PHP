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
        $i = isset($_GET["i"])?$_GET["i"]:0;
        $f = isset($_GET["f"])?$_GET["f"]:0;
        $inc = isset($_GET["inc"])?$_GET["inc"]:0;
        if ($i<$f){
            while ($i<=$f){
                echo "$i ";
                $i += $inc;
            }
        }
        else{
            while ($i>=$f){
                echo "$i ";
                $i -= $inc;
            }
        }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">
        Voltar
    </a>
</div
</body>
</html>
</DOCTYPE>