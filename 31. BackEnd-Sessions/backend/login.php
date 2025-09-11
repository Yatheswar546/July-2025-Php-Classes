<?php

    // Database Connection
    // $db = mysqli_connect("hostname", "user", "password", "database");
    $db = mysqli_connect("localhost", "root", "", "blogs");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];

        do{
            if(empty($email) || empty($password)){
                // echo "All fields are required";
                header("Location: ../login.php?msg=". urlencode("All fields are required"));
                exit;
            }
            else{

                $sql = mysqli_query($db, "SELECT * FROM `users` WHERE email='$email' ");
                // print_r($sql);

                $row = mysqli_fetch_assoc($sql);
                // print_r($row);
                
                if(mysqli_num_rows($sql) > 0){

                    if($password != $row['password']){
                        // echo "Wrong Password";
                        header("Location: ../login.php?msg=". urlencode("Wrong Password"));
                        exit;
                    }
                    else{

                        session_start();
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["name"] = $row["name"];

                        header("Location: ../index.php");
                        exit;
                    }
                }
                else{
                    // echo "User Not Registered";
                    header("Location: ../login.php?msg=". urlencode("User Not Registered"));
                    exit;
                }
            }
        }while(false);
    }
?>