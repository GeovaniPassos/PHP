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
        $c = 1;
        while ($c <= 10) {
            echo $c ." " ;
            $c++;
        }
        
        echo "<br>";
        
        $n = 10;
        while ($n >= 1) {
            echo $n ." ";
            $n--;
        }

        echo "<br>";

        $n = 0;
        while ($n <= 10) {
            echo $n ." ";
            $n += 2;
        }
        
        ?>

    </div>
</body>
</html>