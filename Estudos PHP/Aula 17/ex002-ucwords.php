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
            $nome = "geovani dos passos";
            print("O nome fica ". ucwords($nome));

            print("<br>Ao contrario fica ".strrev($nome));
        
            
        ?>
    </div>
</body>
</html>