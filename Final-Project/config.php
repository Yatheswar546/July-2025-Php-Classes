<?php

    // Database Connection
    // $db = mysqli_connect("hostname", "user", "password", "database");
    $db = mysqli_connect("localhost", "root", "", "blogs"); 

    if($db){
        // echo "Database Connected";
    }
    else{
        die("Something Went Wrong".mysqli_error($db));
    }


?>