<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]: "Não indicado!";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]: "black";
    ?>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Integração HTML5 + PHP
    </title>
    <style>
        div{
            background: rgb(0, 0, 0, 0.2);
        }
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
            position: absolute;
            margin-left: 50%;
            margin-right: auto;
            top: 50%;
            transform: translate(-50%, -50%);
            white-space: nowrap;
        }
        a{
            top: 100%;
            left: 50%;
            transform: translateY(-140%) translateX(-50%);
            position: absolute;
            display: block;
        }
        button{
            cursor: pointer;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br>
    <br>
        <a href="03exercicio.html">
            <button>
                Voltar
            </button>
        </a>
</div>
</body>
</html>