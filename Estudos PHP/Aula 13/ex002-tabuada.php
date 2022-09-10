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
            $n = $_GET["num"]>0?$_GET["num"]:0;
            for($v = 1; $v <= 10; $v++){
                $res = $n * $v;
                echo "$n x $v = $res <br>";
            }
        ?><br><br>
        <a href="javascript:history.go(-1)"class="botao">Voltar</a>
    </div>
</body>
</html>