<?php

    $host = "localhost";
    $dbname = "ads";
    $user = "corporativo";
    $pass = "0608";

    try{
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }
    

?>