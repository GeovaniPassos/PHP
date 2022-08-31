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
        <p>
            <?php
                $e = $_GET["est"]>0?$_GET["est"]:1;
                switch ($e) {
                    case 3:
                    case 23:
                    case 4:
                    case 14:
                    case 27:
                    case 22:
                    case 1:
                        echo "Região <span>Norte</span>";
                        break;
                    case 10:
                    case 18:
                    case 6:
                    case 20:
                    case 17:
                    case 15:
                    case 26:
                    case 2:
                    case 5:
                        echo "Região <span>Nordeste</span>";
                        break;
                    case 11:
                    case 12:
                    case 9:
                        echo "Região <span>Centr-oeste</span>";
                        break;
                    case 25:
                    case 19:
                    case 8:
                    case 13:
                        echo "Região <span>Suldeste</span>";
                        break;
                    case 16:
                    case 21:
                    case 24:
                        echo "Região <span>Sul</span>";
                        break;
                    default: "Inválido";
                    }
            ?><br>
        </p>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>  
    </div>
</body>
</html>