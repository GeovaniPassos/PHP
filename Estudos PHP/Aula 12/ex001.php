<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo03.css">
    <title>Ex de PHP</title>
</head>
<body>
    <div>
        <?php
            $c = 1;
            do {
                echo "$c ";
                $c++;

            } while($c <= 10);
        ?>
    </div>
</body>
</html>