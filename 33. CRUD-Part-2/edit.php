<?php
   
    // Database Connection
    $db = mysqli_connect("localhost","root","","blogs");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $id = $_GET["id"];

        $sql = mysqli_query($db, "SELECT * FROM `blogs` WHERE id=$id");
        $row = mysqli_fetch_assoc($sql);

        $title = $row["title"];
        $description = $row["description"];
        $category = $row["category"];
        $file = $row["image"];

    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];
        $title = $_POST["name"];
        $description = mysqli_real_escape_string($db, $_POST["description"]);
        $category = $_POST["category"];

        /////// Image Part //////////
        $filename = $_FILES["image"]["name"];
        $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $file = md5("blogid".$filename).".".$filetype;

        $target = './db-images/';
        $target_file = $target.basename(md5("blogid".$filename).".".$filetype);

        do{
            if(isset($_FILES["image"]["tmp_name"]) && !empty($_FILES["image"]["tmp_name"])){
                if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png"){
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){

                        // Update Data
                        $sql = mysqli_query($db, "UPDATE `blogs` SET `title`='$title',`description`='$description',
                                                                `image`='$file',`category`='$category' WHERE id=$id");
                                                  
                        if($sql){
                            // $msg = "SUCCESS";
                            header("Location: ./index.php");
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
            else{
                // Update Data
                $sql = mysqli_query($db, "UPDATE `blogs` SET `title`='$title',`description`='$description', `category`='$category' WHERE id=$id");
                                          
                if($sql){
                    // $msg = "SUCCESS";
                    header("Location: ./index.php");
                }
                else{
                    $msg = "Something Went Wrong".mysqli_error($db);
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
                <a href="./index.php" class="admin-btn btn-blg">Manage Blogs</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit the Blog</h2>

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
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="name" class="text-input" value="<?php echo $title; ?>">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body" rows="30" cols="178">
                            <?php echo $description; ?>
                        </textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input" value="<?php echo $file; ?>">
                    </div>
                    <div>
                        <label>Category</label>
                        <input type="text" name="category" id="category" class="text-input" value="<?php echo $category; ?>">
                    </div>
                    <div>
                        <button type="submit" class="admin-btn btn-blg">Edit Blog</button>
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