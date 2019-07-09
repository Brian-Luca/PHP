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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tera $i anos.<br>";
    if ($i<16){
        $tipovoto = "não vota";
    }
    else if (($i >= 16 && $i < 18) || ($i>=65)) {
        $tipovoto = "voto opcional";
    }
    else if($i>64){
        $tipovoto = "voto opcional";
    }
    else{
        $tipovoto = "voto obrigatorio";
    }
    echo "Para essa idade, $tipovoto";
    ?>
    <br>
    <br>
    <a href="exercicio02.html">
        <button>
            Voltar
        </button>
    </a>
</div
</body>
</html>
</DOCTYPE>