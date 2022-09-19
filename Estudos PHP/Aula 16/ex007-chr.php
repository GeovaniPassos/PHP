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
           $letra = chr(72);
           echo "A letra 72 é ,$letra";
           echo "<br>";
           
           $letra = "Ç";
           $cod = ord($letra);
           echo "O codigo da letra $letra é $cod";
        ?>
    </div>
</body>
</html>