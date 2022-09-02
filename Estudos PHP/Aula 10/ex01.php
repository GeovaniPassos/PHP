<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo03.css">
</head>
<body>
    <div>
        <?php
            $n = $_GET["num"]>0?$_GET["num"]:0;
            $o = $_GET["oper"]>1?$_GET["oper"]:1;
            switch ($o) {
                case 1: $r = $n * 2; 
                    break;
                case 2: $r = $n ^ 3; 
                    break;
                case 3: $r = sqrt($n); //$n ^ (1/2);
            }
            echo "O resultado da operação solicitada foi <span>$r</span>";

        ?><br>
        
            <button class="botao"><a href="ex01.html" >Voltar</a></button>
        
    </div>
</body>
</html>