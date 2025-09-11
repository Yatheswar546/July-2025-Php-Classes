<?php

    // Database Connection
    $db = mysqli_connect("localhost","root","","blogs");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $id = $_GET["id"];

        $sql = mysqli_query($db, "DELETE FROM `blogs` WHERE id=$id");

        if($sql){
            header("Location: ./index.php");
            exit;
        }
        else{
                die("Something Went Wrong".mysqli_error($db));
        }
    }

?>