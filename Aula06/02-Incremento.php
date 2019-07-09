<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        Operadores de Atribuição
    </title>
</head>
<body>
    <div>
        <?php
            /*Esse exercicio pretende demonstrar o uso
            de operadores de incremento e decremento*/
            $atual = $_GET["aa"]; //Esta linha vai receber o valor indicado na URL(por: ?aa(Var) = x).
            echo "O Ano Atual é $atual e o anterior é: ". --$atual. "<br>"; #Esta linha escreve o ano dado na Url e decrementa-o em 1.
            echo $cont = 1 * $atual++ . "<br>";
            echo $atual;

        ?>
    </div
</body>
</html>
</DOCTYPE>