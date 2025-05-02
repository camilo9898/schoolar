<?php
    include('../config/database.php');

    session_start();

    if(isset($_SESSION['user_id']))

    $email = $_POST['e_mail'];
    $passw = $_POST['p_sswd'];

    $sql = "
    SELECT
         --id,
         COUNT(id) as total
    FROM
        users
    WHERE 
        email = '$email' and
        password = '$passw' and
        status = true
        Group by
;
        $res = pg_query($conn, $sql);

        if($res){
        
            $row = pg_fetch_assoc($res);
        
            if($row['total'] > 0){
                //echo "
                echo "Login OK";
                
            }else{

                echo "Login failed";
            }
        }

?>