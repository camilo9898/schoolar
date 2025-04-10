<?php

    //Config connection
    
    $host       = "aws-0-us-east-1.pooler.supabase.com";
    $port       = "6543";
    $dbname     = "postgres";
    $user       = "postgres.lgngmzlfpnfxbzrucpva";
    $password   = "unicesmag@@";

    /*
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "schoolar";
    $user       = "postgres";
    $password   = "unicesmag";

    */

    //Create connection
    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password =$password
    ");

    if(!$conn){
        
        //die("Connection error: " . preg_last_error());

    }else{
        
        //echo "Success connection";

    }

   // pg_close();

?>