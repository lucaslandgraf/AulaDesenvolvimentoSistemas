<?php
class ConnectionFactory{
    static $connection;

    public static function getConnection(){
        if(!isset($connection)){
            
        $host = "localhost";
        $dbName = "teste";
        $user = "root";
        $pass = "";
        $port = 3307; // se for o computador pessoal a senha é 3306

    try{
        $connection = new PDO("mysql:host=$host;dbname=$dbName;port=$port",$user,$pass);
        #echo("Conectado com sucesso!!");
    }catch(PDOException $ex){
        echo("ERRO ao conectar ao banco de dados! <p>$ex</p>");
    }
        }
        return $connection;
    }

}
    
?>       