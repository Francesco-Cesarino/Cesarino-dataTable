<?php
    $host = "172.17.0.1:3306";
    $user = "root";
    $pass = "";
    $db = "db";

    $mysqli = new mysqli($host, $user, $pass, $db);
    
    if($mysqli -> connect_error){
        echo "Connessione non riuscita".$mysqli->connect_error;
    }
?>