<?php

    session_start();

    // echo $_SESSION["id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Logo</h1>
        </div>
        <div class="menu_open">
            <i class='bx bx-menu'></i>
        </div>
        <ul class="links">
            <div class="menu_close">
                <i class='bx bx-x'></i>
            </div>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            
            <?php if(isset($_SESSION["id"])): ?>
            <li><a href="./read.php">Create a Blog</a></li>
            <li><a href="./backend/logout.php" class="logout">Logout</a></li>

            <?php else: ?>
            <li><a href="./login.php">Login</a></li>

            <?php endif; ?>

        </ul>
    </nav>

    
    <div class="banner">

        <?php if(isset($_SESSION["name"])): ?>
        <h1>Welcome <?php echo htmlspecialchars($_SESSION["name"]); ?></h1>
            
        <?php else: ?>
        <h1>Welcome </h1>

        <?php endif; ?>
    
    </div>

    <!-- Custom Js Script -->
    <script src="./js/script.js"></script>
</body>

</html>