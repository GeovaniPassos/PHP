<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $ano = $_GET["an"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.";
            $tipo = ($idade>=18 && $idade < 65) ? "obrigatório" : "não obrigatório";
            echo "<br>Seu voto é $tipo.";
        ?>
    </div>
</body>
</html>