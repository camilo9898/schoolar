<?php

    //Config connection
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "schoolar";
    $user       = "postgres";
    $password   = "unicesmag";

    //Create connection
    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password =$password
    ");

    if(!$conn){
        
        die("Connection error: " . preg_last_error());

    }else{
        
        echo "Success connection";

    }

    pg_close();

?>