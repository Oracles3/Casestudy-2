<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PET FOOD SHOP</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="announcement-bar">
<p class="announcement-bar_message">Get FREE Delivery on all purchases over $300</p>
</div>

<!-- Nav link -->
<div class="contain">
    <div class="nav-wrapper">
        <div class="left">
            <div class="nav-link active-nav-link">
                <a href="index.php">Home</a>
            </div>

            <div class="nav-link">
                <a href="Aboutus.php">About us</a>
            </div>

            <div class="nav-link">
                <a href="Category.php">Category</a>
            </div>

            <div class="nav-link">
                <a href="Product.php">Product</a>
            </div>

            <div class="nav-link">
                <a href="Login.php">Invoice</a>
            </div>
        </div>

<!-- Brand Logo with the shops name -->
        <div class="right">
            <div class="brand">
                <img class="Logo" src="Images/Pictures/logo.png" alt="Logo">
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="portfolio-wrappers">
        </div>

<!-- The body which contains images of aninamls which link to their pages -->
        <a href="Aboutus.php">
            <div class="portfolio-wrapper">
                <div class="portfolio-img-background" style="background-image: url('Images/Pictures/Dog.jpg')" >

                    <div class="img-text-wrapper">

                        <div class="subtitle">
                            <div class="shop">
                                About Us
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="Category.php">
            <div class="portfolio-wrapper">
                <div class="portfolio-img-background" style="background-image: url('Images/Pictures/bird.jpg')">

                    <div class="img-text-wrapper">
                        <div class="subtitle">
                            Category
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<a href="Product.php">
    <div class="portfolio-wrapper">
        <div class="portfolio-img-background" style="background-image: url('Images/Pictures/rabbit.jpg')">

            <div class="img-text-wrapper" style="height: 100%">
                <div class="subtitle">
                    Products
                </div>
            </div>
        </div>
    </div>
</a>

<a href="Login.php">
    <div class="portfolio-wrapper">
        <div class="portfolio-img-background" style="background-image: url('Images/Pictures/cat.jpg')">

            <div class="img-text-wrapper">
                <div class="subtitle">
                    Invoice
                </div>
            </div>
        </div>
    </div>
</a>

<!-- Footer Coding -->
<?php include ('Footer.php') ?>
</body>
</html>


