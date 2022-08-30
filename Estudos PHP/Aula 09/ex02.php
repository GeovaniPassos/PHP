<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo02.css">
</head>
<body>
    <div>
        <?php
            $a  = $_GET["ano"]>0?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos";
            if ($i < 16){
                $tipoVoto = "você não pode votar";
            } else if (($i >= 16 && $i < 18) || ($i > 65)) {
                    $tipoVoto = "o voto é opcional";
                } else {
                    $tipoVoto = "o voto é obrigatório";
                }
            echo "<br>Para essa idade, $tipoVoto!";
        ?>
    </div>
</body>
</html>