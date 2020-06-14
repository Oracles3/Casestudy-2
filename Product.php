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

            <div class="nav-link active-nav-link">
                <a href="Product.php">Rabbits</a>
            </div>

            <div class="nav-link ">
                <a href="Invoice.php">Cats</a>
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

<<!-- Rabbit product coding -->
<table class="productHolder">
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="Images/Pictures/dog%20food1.png" alt="Dog Food">
            <div class="add">
                <p class = "atc">$30 - Pedigree</p>
                <button id = "ecs1" class="atcb1" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp2.png">
            <div class="add">
                <p class = "atc">$30 - Hills</p>
                <button id = "ecs2" class="atcb2" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp3.png">
            <div class="add">
                <p class = "atc">$30 - Hills</p>
                <button class="atcb3" id = "ecs3" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
    </tr>
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp4.png">
            <div class="add">
                <p class = "atc">$30 - Eukanuba</p>
                <button id = "lsd1" onclick="addProductToCart(this.id)" class="atcb4">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp5.png">
            <div class="add">
                <p class = "atc">$30 - Black Hawk</p>
                <button id = "lsd2" onclick="addProductToCart(this.id)" class="atcb5">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp6.png">
            <div class="add">
                <p class = "atc">$30 - Royal Canin</p>
                <button id = "lsd3" onclick="addProductToCart(this.id)" class="atcb6">+</button>
            </div>
        </td>
    </tr>
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp7.png">
            <div class="add">
                <p class = "atc">$30 - Pedigree</p>
                <button id = "xan1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp8.png">
            <div class="add">
                <p class = "atc">$30 - Purina</p>
                <button id = "xan2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp9.png">
            <div class="add">
                <p class = "atc">$30 - K9Natural</p>
                <button id = "xan3" onclick="addProductToCart(this.id)" class="atcb9">+</button>
            </div>
        </td>
    </tr>
</table>

<footer>
    <?php include ('Footer.php') ?>
</footer>


</body>
</html>