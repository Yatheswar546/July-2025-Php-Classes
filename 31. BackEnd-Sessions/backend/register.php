<?php

    // Database Connection
    // $db = mysqli_connect("hostname", "user", "password", "database");
    $db = mysqli_connect("localhost", "root", "", "blogs");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // echo $name."<br>";
        // echo $email."<br>";
        // echo $phone."<br>";
        // echo $gender."<br>";
        // echo $password."<br>";
        // echo $cpassword."<br>";
        
        ////////////// Creating UserID //////////////
        // userid - first 3 letter of name + first 3 numbers of phone_number + random_number + encryption
        $userid = md5(substr($name, 0, 3).substr($phone, 0, 3).random_int(10000, 99999));
        // echo $userid;

        ////////////// File Upload //////////////
        // Accessing the images
        $filename = $_FILES["image"]["name"]; // NBK.jpeg
        // echo $filename."<br>";
        // print_r($filename);

        // Extracting filetype
        $filetype = $_FILES["image"]["type"];  // image/jpeg
        $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        // echo $filetype."<br>";

        // renaming the image
        // $file1 = "image".$filename;
        // echo $file1."<br>";
        // $file2 = md5("image".$filename); //md5() encryption method
        // echo $file2."<br>";

        $file = md5("image".$filename).".".$filetype;
        // echo $file."<br>";

        // Moving the images to db-images folder
        $target = '../db-images/users/';
        // $target_file = $target.basename(md5(("image".$filename).".".$filetype));
        $target_file = $target.$file;
        // echo $target_file."<br>";

        // move_uploaded_file(source, destination);
        // move_uploaded_file($_FILES["image"]["tmp_name"] ,$target_file);


        ////////////// Form Validation //////////////
        do{
            if(empty($name) || empty($email) || empty($phone) || empty($gender) || empty($file) || empty($password) || empty($cpassword)){
                // echo "All fields are required";
                header("Location: ../register.php?msg=". urlencode("All fields are required"));
                exit;
            }
            elseif($password != $cpassword){
                // echo "Password should match";
                header("Location: ../register.php?msg=". urlencode("Password should match"));
                exit;
            }
            else{
                if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png"){
                    if(move_uploaded_file($_FILES["image"]["tmp_name"] ,$target_file)){

                        // Inserting the data into DB
                        // mysqli_query("database_connection", "sql_query")
                        $sql = mysqli_query($db, "INSERT INTO `users`(`name`, `phone`, `email`, `gender`, `image`, `password`, `userid`) 
                                                        VALUES ('$name','$phone','$email','$gender','$file','$password','$userid')");

                        if($sql){
                            // echo "SUCCESS";
                            header("Location: ../login.php");
                            exit;
                        }
                        else{
                            // echo "Something went WRONG !!!!".mysqli_error($db);
                            header("Location: ../register.php?msg=". urlencode("Something went WRONG !!!!".mysqli_error($db)));
                            exit;
                        }

                    }
                    else{
                        // echo "Image not Moved";
                        header("Location: ../register.php?msg=". urlencode("Image Not Moved"));
                        exit;
                    }
                }
                else{
                    // echo "Image Not Accepted";
                    header("Location: ../register.php?msg=". urlencode("Image Not Accepted"));
                    exit;
                }
            }
        }while(false);
    }
?>