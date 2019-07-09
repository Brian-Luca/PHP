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
    <form method="get" action="03-tabujonsons.php">
        Número: <label>
            <select name="tab">
                <?php   $v = 1;
                        while ($v<=10) {
                           echo "<option value='$v'>$v</option>";
                           $v++;
                    }
                   echo "<br>";
                ?>
                <br><br>
                <input type="submit" class="botao" value="Tabuada">
            </select>
        </label>
    </form>
</div
</body>
</html>
</DOCTYPE>