<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo03.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $ini = $_GET["inicio"]>0?$_GET["inicio"]:0;
            $fin = $_GET["final"]>0?$_GET["final"]:0;
            $inc = $_GET["incre"]>0?$_GET["incre"]:0;
            
            $x = 1;

            if ($ini < $fin) {
                while ($ini <= $fin) {
                    echo "$ini ";
                    $ini += $inc;  
                }      
            } else if ( $ini > $fin) {
                while ($ini >= $fin) {
                    echo "$ini ";
                    $ini -= $inc;
                }
            }


        ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
</body>
</html>