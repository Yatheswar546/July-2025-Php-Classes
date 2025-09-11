<?php
    
    session_start();

    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $name = $_SESSION["name"];

        // Database Connection
        require('./config.php');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $title = $_POST["name"];
            $description = mysqli_real_escape_string($db, $_POST["description"]);
            $category = $_POST["category"];

            // author name is fetched during login time
            $author = $name;

            // creating blogid
            $blogid = md5(substr($title,0,3).substr($category,0,3).random_int(10000,99999));

            /////// Image Part //////////
            $filename = $_FILES["image"]["name"];
            // echo $filename."<br>";
            $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            // echo $filetype."<br>";
            $file = md5("blogid".$filename).".".$filetype;
            // echo $file."<br>";

            $target = './db-images/blogs/';
            $target_file = $target.basename(md5("blogid".$filename).".".$filetype);

            // echo $target_file;

            do{
                if(empty($title) || empty($description) || empty($file) || empty($category)){
                    $msg = "All Fields are Required !!!";
                }
                else{
                    if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png"){
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){

                            // Insert Data
                            $sql = mysqli_query($db, "INSERT INTO `blogs`(`title`, `description`, `image`, `category`, `blogid`, `author`) 
                                                      VALUES ('$title','$description','$file','$category','$blogid', '$author')");

                            if($sql){
                                // $msg = "SUCCESS";
                                header("Location: ./read.php");
                            }
                            else{
                                $msg = "Something Went Wrong".mysqli_error($db);
                            }
                        }   
                        else{
                            $msg = "Image Not Moved";
                        }
                    }
                    else{
                        $msg = "Image Not Accepted";
                    }
                }
            }while(false);
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!----------------MAIN SECTION ----------------------------->
    <div class="main">

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="./create.php" class="admin-btn btn-blg">Add Blog</a>
                <a href="./read.php" class="admin-btn btn-blg">Manage Blogs</a>
                <a href="./index.php" class="admin-btn btn-blg">Back to Home</a>

                <h2 class="name">Welcome <?php echo $name; ?></h2>
            </div>

            <div class="content">
                <h2 class="page-title">Create a Blog</h2>

                <?php
                    if(!empty($msg)){
                        echo "
                            <div class='error_msg'>
                                $msg
                            </div>
                        ";
                    }
                ?>

                <form action="#" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body" rows="30" cols="178"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Category</label>
                        <input type="text" name="category" id="category" class="text-input">
                    </div>
                    <div>
                        <button type="submit" class="admin-btn btn-blg">Add Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!----- CkEditor 5 Script -------------------->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <script src="./script.js"></script>

</body>

</html>

<?php
    }
    else{
        header("Location: ./index.php");
    }
?>