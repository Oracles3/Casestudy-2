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
<div class="contain">
    <div class="nav-wrapper">
        <div class="left">
            <div class="nav-link">
                <a href="index.php">Home</a>
            </div>

            <div class="nav-link">
                <a href="Aboutus.php">About us</a>
            </div>

            <div class="nav-link active-nav-link">
                <a href="Category.php">Categorys</a>
            </div>

            <div class="nav-link">
                <a href="Product.php">Products</a>
            </div>

            <div class="nav-link ">
                <a href="Login.php">Invoice</a>
            </div>

            <!-- Brand Logo with the shops name -->

            <div class="brand">
                <img class="Logo" src="Images/Pictures/logo.png" alt="Logo">
            </div>
        </div>
    </div>
</div>

<!-- Category coding -->
<a href="Product.php">
<div class="portfolio-wrapper">
    <div class="portfolio-img-background" style="background-image: url('Images/Pictures/dog 2.jpg')" >
        <div class="img-text-wrapper">
            <div class="subtitle">
                <div class="shop">
                    Dog Food
                </div>
            </div>
        </div>
    </div>
</div>

    <a href="Product.php">
<div class="portfolio-wrapper">
    <div class="portfolio-img-background" style="background-image: url('Images/Pictures/cat 2.jpg')">
        <div class="img-text-wrapper">
            <div class="subtitle">
                Cat Food
            </div>
        </div>
    </div>
</div>

        <a href="Product.php">
<div class="portfolio-wrapper">
    <div class="portfolio-img-background" style="background-image: url('Images/Pictures/bird 2.jpg')">
        <div class="img-text-wrapper" style="height: 100%">
            <div class="subtitle">
                Bird Food
            </div>
        </div>
    </div>
</div>

            <a href="Product.php">
<div class="portfolio-wrapper">
    <div class="portfolio-img-background" style="background-image: url('Images/Pictures/rabbit 2.jpg')">
        <div class="img-text-wrapper">
            <div class="subtitle">
                Rabbit Food
            </div>
        </div>
    </div>
</div>

<!-- Footer Coding -->
<?php include ('Footer.php') ?>


</body>
</html>