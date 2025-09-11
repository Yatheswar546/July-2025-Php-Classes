<?php

    // Database Connection
    $db = mysqli_connect("localhost","root","","blogs");

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

        <!-------------- Admin Content ------------------------------>
        <div class="admin-content">
            <div class="button-group">
                <a href="./create.php" class="admin-btn btn-blg">Add Blog</a>
                <a href="./index.php" class="admin-btn btn-blg">Manage Blogs</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Blogs</h2>

                <table>
                    <thead>
                        <th>S. No.</th>
                        <th>Blog Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>

                        <?php
                            
                            $blogs = mysqli_query($db, "SELECT * FROM `blogs`");

                            if(!$blogs){
                                die("Invalid Query!!!".mysqli_error($db));
                            }
                            else{
                                $count = 1;
                                while($row = mysqli_fetch_assoc($blogs)){

                                    echo "  
                                        <tr>
                                            <td class='row_id'>$count</td> 
                                            <td>$row[title]</td>
                                            <td><img src='./db-images/$row[image]' alt=''></td>
                                            <td>$row[category]</td>
                                            <td><a href='#' class='edit'>Edit</a></td>
                                            <td><a href='#' class='delete'>Delete</a></td>
                                        </tr>
                                    ";
                                    $count = $count + 1;
                                }
                            }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>