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
           $text = "Esse é um texto gerado em PHP e mostra o funcionamento do wordwrap";
           $newtext = wordwrap($text, 5, "<br />\n", true);
           
           echo $newtext; 
        ?>
    </div>
</body>
</html>