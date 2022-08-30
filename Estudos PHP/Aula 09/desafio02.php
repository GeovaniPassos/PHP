<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo02.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["n1"]>0?$_GET["n1"]:00;
            $n2 = $_GET["n2"]>0?$_GET["n2"]:00;
            $media = ($n1 + $n2) / 2;
            echo "A média entre $n1 e $n2 é igual a $media";
                if ($media >= 7){
                    $sit = "Aprovado";
                } else if (($media < 7) && ($media >= 5)){
                    $sit = "Recuperação";
                } else {
                    $sit = "Reprovado";
                }
                echo "<br>A situação do aluno é: $sit";

        ?>
    </div>
</body>
</html>