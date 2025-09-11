<?php

    session_start();

    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $name = $_SESSION["name"];
        
        // Database Connection
        require('./config.php');

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $id = $_GET["id"];
        
            $sql = mysqli_query($db, "DELETE FROM `blogs` WHERE id=$id");
        
            if($sql){
                header("Location: ./read.php");
                exit;
            }
            else{
                    die("Something Went Wrong".mysqli_error($db));
            }
        }
    }
    else{
        header("Location: ./index.php");
    }

?>