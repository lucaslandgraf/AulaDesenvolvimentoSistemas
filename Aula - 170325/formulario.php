<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Variáveis de request-->
    <h1>Oi!
        <?php
        
            echo $_GET['mail'];
            echo $_GET['nome'];
            echo $_GET['password'];
            echo $_GET['parente'];
            echo $_GET['codigo'];
            echo $_GET['cpf'];

        ?>
    </h1> 
</html> 