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

    <div class="container forms login-form mt-5 mb-5 rounded-3">
        <h2 class="text-center p-3">Login</h2>

        <?php if (!empty($msg)) { ?>
            <div class="message">
                <h5><strong><?php echo htmlspecialchars($msg); ?></strong></h5>
            </div> 
        <?php } ?>

        <form action="./backend/login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>

            <div class="already-a-member p-3 d-flex flex-column justify-content-center align-items-center">
                <p>Not a member ? <span><a href="./register.php">Register Now</a></span></p>
                <!-- <a href="">Back to Home</a> -->
            </div> 
        </form>
    </div>

    <!-- Bootstrap Js Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>