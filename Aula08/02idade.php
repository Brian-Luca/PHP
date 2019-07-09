<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Integração HTML5 + PHP
    </title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não Informado";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"Ano não Informado";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sexo não Informado";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
    ?>
    <br>
    <br>
    <a href="02exercicio.html">Voltar</a>
</div
</body>
</html>
</DOCTYPE>