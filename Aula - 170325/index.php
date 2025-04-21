<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

echo "Olá Mundo!";

    $nome = "Lucas"; // Texto com aspas (duplas ou simples)
    $idade = 19; // Número sem aspas

    echo "<br>Nome: ".$nome." <br>Idade: ".$idade;

?>

<h2>
    <?php
    // gettype(&nome) retorna o tipo da variável &nome
        echo "A variável nome é do tipo: " .gettype($nome).". idade é do tipo: ". gettype($idade);
    ?>
</h2>

<?php
    $vetor = array(2, 4, array("oi", "tudo", "bem"));
    // var_dump($vetor) retorna a estrutura da variável $vetor
    var_dump($vetor);

?>

<br><br><a href="formulario.html" target="blank">Vá para o form com ação em PHP</a>

</body>
</html>