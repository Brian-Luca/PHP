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
    <?php
        $R = isset($_GET["Estados"])? $_GET["Estados"]:"Você não escolheu um estado";
        switch ($R){
            case "AC":
            case "AM":
            case "RR":
            case "RO":
            case "PA":
            case "TO":
            case "AP":
                echo "Você mora na Região Norte!";
                break;
            case "MT":
            case "GO":
            case "DF":
            case "MS":
                echo "Você mora na Região Centro-Oeste!";
                break;
            case "MA":
            case "PI":
            case "CE":
            case "RN":
            case "PB":
            case "PE":
            case "SE":
            case "BA":
            case "AL":
                echo "Você mora na Região Nordeste!";
                break;
            case "MG":
            case "SP":
            case "ES":
            case "RJ":
                echo "Você mora na Região Suldeste!";
                break;
            case "PR":
            case "SC":
            case "RS":
                echo "Você mora na Região Sul!";
                break;
            default:
                echo "Você não escolheu uma opção!";
        }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">
        Voltar
    </a>
</div>
</body>
</html>
</DOCTYPE>