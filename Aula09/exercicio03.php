<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Integração HTML5 + PHP
    </title>
    <style>
        span{
            color: #8c0000;
            font-weight: bold;
            font-size: large;
            text-transform: uppercase;
        }
        a{
            text-decoration: none;
            color: #fff;
            background-color: #273747;
            font: 11pt Helvetica;
            padding: 10px;
            box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        if (($n1==null) || ($n2==null)){
            $n1 = 0;
            $n2 = 0;
        }
        $med = ($n1 + $n2)/2;
        echo "A média entre <span>".number_format($n1, 1, ".",",")."</span> e <span>".number_format($n2, 1, ".",",")."</span> é igual a <span>".number_format($med,1,".",",")."</span>";
        if ($med>=0&&$med<5){
            $res = "reprovado";
        }
        else if ($med>=5&&$med<=7){
            $res = "recuperação";
        }
        else if($med>7&&$med<=10){
            $res = "aprovado";
        }
        echo "<br>Situação do aluno: <span>$res</span>";
    ?>
    <br>
    <br>
    <a href="exercicio03.html">
        Voltar
    </a>
</div
</body>
</html>
</DOCTYPE>