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

            <div class="nav-link active-nav-link">
                <a href="Aboutus.php">About Us</a>
            </div>

            <div class="nav-link">
                <a href="Category.php">Category</a>
            </div>

            <div class="nav-link">
                <a href="Product.php">Product</a>
            </div>

            <div class="nav-link">
                <a href="Invoice.php">Invoice</a>
            </div>

        <!-- Brand Logo with the shops name -->
        <div class="right">
            <div class="brand">
                <img class="Logo" src="Images/Pictures/logo.png" alt="Logo">
            </div>
        </div>
    </div>
</div>


<?php
echo "<h1>This is a online website which provides animal food products with easy access</h1>";
?>

    <img class = "slideshow" name = "slide" alt="Slide">

<!-- Footer Coding -->
<?php include ('Footer.php') ?>

    <script src="main.js"></script>
</body>
</html>