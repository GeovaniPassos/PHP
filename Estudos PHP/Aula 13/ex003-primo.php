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
            $n = $_GET["valor"]>0?$_GET["valor"]:0;   
            echo "Análisando o número $n <br>";
            echo "Valores múltiplos: ";
            $totmult = 0;
            for ($c = 1; $c <= $n; $c++){
                $mult = $n/$c;
                if ($n%$c == 0){
                    $mult = $c;
                    echo "$mult ";
                    $totmult++;
                }    
            }
            echo "<br>Total de Multiplos: $totmult";
            echo "<br>Resultado: ";
            if ($totmult > 2){
                echo "O número $n =<strong> NÃO É PRIMO!</strong>";
            } else {
                echo "O número $n =<strong> É PRIMO!</strong>";
            }
            
                
            
                
        ?><br><br>
        <a href="javascript:history.go(-1)"class="botao">Voltar</a>
    </div>
</body>
</html>