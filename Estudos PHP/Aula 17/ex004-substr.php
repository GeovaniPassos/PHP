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
            $site = "Curso em Video";
            $sub = substr($site,0,5);
            echo "$sub<br>";
            print(substr($site,9,5));
            
        ?>
    </div>
</body>
</html>