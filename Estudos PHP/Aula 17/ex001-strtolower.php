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
            $nome2 = strtolower($nome);
            echo "Seu nome é $nome2";
            
            $nome3 = strtoupper($nome);
            echo "<br>Seu nome é $nome3";

            $nome4 = ucfirst($nome);
            echo "Seu nome é $nome4";
        
            
        ?>
    </div>
</body>
</html>