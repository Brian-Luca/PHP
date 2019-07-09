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
        function soma (){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;
            for ($i = 0; $i < $tot; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2,8,9,4,2,3,1);
        echo "A soma dos valores é $r";
    ?>
</div
</body>
</html>
</DOCTYPE>