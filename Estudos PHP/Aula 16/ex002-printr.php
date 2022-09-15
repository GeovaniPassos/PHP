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
            $v [0] = 4;
            $v [1] = 8;
            $v [2] = 12;
            print_r($v);
            $v2 = array (3,6,8,9,71);
            echo "<br>";
            print_r($v2);
            echo "<br>";
            var_dump($v);
            $v2 = array (3,6,8,9,71);
            echo "<br>";
            var_export($v2);
        ?>
    </div>
</body>
</html>