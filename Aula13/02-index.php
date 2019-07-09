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
    <form method="get" action="02-tabuada.php">
        <select name="num">
            <?php
                for ($c = 1; $c<=10; $c++){
                    echo "<option value='$c'>$c</option>";
                }
            ?>
        </select><br><br>
        <input type="submit" value="Tabuada" class="botao">
    </form>
</div
</body>
</html>
</DOCTYPE>