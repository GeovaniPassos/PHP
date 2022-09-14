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
            function test(&$x){
                $x += 2;
                echo "O valor de X é $x";
            }

            $a = 3;
            test($a);
            echo "<br>O valor de A é $a";
        ?>
    </div>
</body>
</html>