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
        if ($i >=18){
            $v = "já pode votar";
            $d = "já pode digirir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode digirir";
        }
        echo "Com essa idade você $v e tambem $d.";
    ?>
    <br>
    <br>
    <a href="exercicio01.html">
        <button>
            Voltar
        </button>
    </a>
</div
</body>
</html>
</DOCTYPE>