<!DOCTYPE html>
<html lang="en">
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
        //$x = $_GET["v4"];
        //echo $x;
        
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = $_GET[$url]>0?$_GET[$url]:0; 
            $i++;   
        }   
        //echo "$num1 $num2 $num3 $num4 $num5"
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i : ". $$v . "<br>";
            $i++;
        } 
        
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>  
    </div>
</body>
</html>