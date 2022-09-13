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
            function soma($a,$b) {
                $s = $a + $b;
                echo "<p>A soma é: $s</p>";
            }

            soma(5,2);
            soma(8,4);
            $x = 5;
            $y = 6;
            soma($x,$y);

        ?>
    </div>
</body>
</html>