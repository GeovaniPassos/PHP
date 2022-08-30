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
            if ($i >=18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            echo "<br>Você $v e $d!";
        ?>
    </div>
</body>
</html>