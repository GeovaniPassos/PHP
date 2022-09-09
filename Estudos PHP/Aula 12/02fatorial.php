<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo03.css">
    <title>Exercicio de PHP</title>
</head>
<body>
    <div>
        <?php
            $v = $_GET["val"]>0?$_GET["val"]:0;
            echo "Calculando o fatorial de $v <br>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);
            echo "$v ! = $fat";
        ?>
        <br><br><br><a href="02index.html" class="botao">Voltar</a>
    </div>
</body>
</html>