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
        $vetor[1] = "Complicado";
        $vetor[2] = "né";
        $vetor[3] = "galerinha do ";
        $texto = join(" ", $vetor);
        print $texto;
        $vetor[1] = "curso";
        $vetor[2] = "em";
        $vetor[3] = "vídeo";
        $texto = implode(" ",$vetor);

        print $texto;
    ?>
</div
</body>
</html>
</DOCTYPE>