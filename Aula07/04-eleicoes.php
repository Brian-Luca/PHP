<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Operadores Relacionais
    </title>
</head>
<body>
<div>
    <?php
        $ano = $_GET["an"];
        $idade = 2019  - $ano;
        $voto = ($idade>=18 and $idade<=64) ? "é obrigado a votar" : "não é obrigado a votar";
        echo "Quem nasceu em $ano tem $idade anos de idade e $voto.";
    ?>
</div
</body>
</html>
</DOCTYPE>