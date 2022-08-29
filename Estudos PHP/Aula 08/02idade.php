<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Nome nao informado]";
            $ano = isset($_GET["ano"])?$_GET["nome"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
            $idade = date ("Y") - $ano;
            echo "$nome é $sexo, e tem $idade anos."
        ?>
        <br>
        <a href="ex002.html"> VOLTAR </a>
    </div>
</body>
</html>