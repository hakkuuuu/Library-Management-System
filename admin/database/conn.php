<?php
    function connect(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "lmsdb";

        $con = new mysqli($host, $user, $pass, $db);

        if($con->connect_error){
            echo $con->connect_error;
        }else{
            return $con;
        }
    }
    
?>
