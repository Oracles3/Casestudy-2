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
                <a href="Aboutus.php">Dogs</a>
            </div>

            <div class="nav-link">
                <a href="Category.php">Birds</a>
            </div>

            <div class="nav-link">
                <a href="Product.php">Rabbits</a>
            </div>

            <div class="nav-link active-nav-link">
                <a href="Invoice.php">Cats</a>
            </div>

            <div class="nav-link">
                <a href="cart.html">Cart</a>
            </div>
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

<body>

<img class = "loginlogo" src="photos/plogo.png">
<p class = "loginlogotext">Create Acount</p>
<form action = "createdb.php" method = "post" class = "log">
    <p class = "loginform">Name:</p>
    <input type = "text" name = "createname" class = "input">
    <p class = "loginform">Username:</p>
    <input type = "text" name = "createusername" class = "input">
    <p class = "loginform">Email:</p>
    <input type="text" name = "createemail" class = "input">
    <p class = "loginform">Password:</p>
    <input type="password" name = "createpwd" class = "input">
    <p class = "loginform"><button class = "logbutton" value = "insert">Create Account</button></p>
</form>
</body>


<!-- http://herokugitphpleisong.herokuapp.com/phpMyAdminStephan/index.php?lang=en -->


<footer>
    <p>Assessment 2</p>
    <p>Unitec</p>
    <p>Created by Stephan Teaca-Jucan</p>
</footer>


</body>
</html>