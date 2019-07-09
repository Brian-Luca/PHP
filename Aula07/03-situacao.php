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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A média entre $nota1 e $nota2 é $m<br>";
        $sit = $m>6 ? "Aprovado" : "Reprovado";
        Echo "O aluno foi $sit";
    ?>
</divn
</body>
</html>
</DOCTYPE>