<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PET FOOD STORE</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" async></script>

</head>
<body>
<div class="announcement-bar">
    <p class="announcement-bar_message">Get FREE Delivery on all purchases over $300</p>
</div>

<!-- Nav link -->
<div class="container">
    <div class="nav-wrapper">
        <div class="left">
            <div class="nav-link">
                <a href="index.php">Home</a>
            </div>

            <div class="nav-link">
                <a href="Aboutus.php">About Us</a>
            </div>

            <div class="nav-link">
                <a href="Category.php">Category</a>
            </div>

            <div class="nav-link">
                <a href="Product.php">Product</a>
            </div>

            <div class="nav-link active-nav-link">
                <a href="Login.php">Login</a>
            </div>

        <!-- Brand Logo with the shops name -->
        <div class="right">
            <div class="brand">
                <img class="Logo" src="Images/Pictures/logo.png" alt="Logo">
                <div>PET FOOD STORE</div>
            </div>
        </div>
    </div>
</div>

<<!-- Cat product coding -->
<body>
<p class = "login1logotext">Login</p>
<form action = "login.php" method = "post" class = "log">
    <p class = "loginform">Username:</p>
    <input type = "text" name = "username" class = "input">
    <p class = "loginform">Password:</p>
    <input type="password" name = "pwd" class = "input">
    <p class = "loginform"><button class = "logbutton">Login</button></p>
</form>
<a href = "createaccount.php"><p class = "loginform"><button class = "logbutton1">Create Account</button></p></a>
</body>



<!-- http://herokugitphpleisong.herokuapp.com/phpMyAdminStephan/index.php?lang=en -->


<footer>
    <?php include ('Footer.php') ?>
</footer>


</body>
</html>