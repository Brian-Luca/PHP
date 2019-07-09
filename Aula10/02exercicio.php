<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Estrutura Condicional Switch
    </title>
</head>
<body>
<div>
    <form method="get" action="exercicio02.php">
        Dia da Semana: <input type="number" name=ds min="2" max="8" value="<?php $ds = date('N'); echo ++$ds;?> " required>
        <br>
        <input type="submit" class="botao" value="Analisar">
    </form>
</div>
</body>
</html>