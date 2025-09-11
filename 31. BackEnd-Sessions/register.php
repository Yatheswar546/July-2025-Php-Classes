<?php
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Forms</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <div class="container forms mt-5 mb-5 rounded-3">
        <h2 class="text-center p-3">Sign Up</h2>

        <?php if (!empty($msg)) { ?>
            <div class="message">
                <h5><strong><?php echo htmlspecialchars($msg); ?></strong></h5>
            </div> 
        <?php } ?>

        <form action="./backend/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="UsernameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputPhone" name="phone" aria-describedby="PhoneHelp">
            </div>
            <div class="gender d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="radioDefault2">
                    <label class="form-check-label" for="radioDefault2">
                        Female
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Profile Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword" name="cpassword">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions</label>
            </div> -->
            <button type="submit" class="btn btn-primary mb-3 w-100">Sign Up</button>

            <div class="already-a-member p-3 d-flex flex-column justify-content-center align-items-center">
                <p>Already a member ? <span><a href="./login.php">Login Now</a></span></p>
                <a href="./index.php">Back to Home</a>
            </div> 

        </form> 
    </div>

    <!-- Bootstrap Js Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>