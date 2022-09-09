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
            $n = $_GET["tab"]>0?$_GET["tab"]:0;
            $mult = 1;
                echo"Tabuada de $n:<br><br>";
            do {
                $res = $mult * $n; 
                echo " $mult x $n = $res <br>";
                $mult++;
            } while ($mult <= 10);
        ?>
        <br><br><br><a href="03index.html" class="botao">Voltar</a>
    </div>
</body>
</html>