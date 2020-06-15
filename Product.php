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
                    <button id = "dog1" class="atcb1" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/dog food2.png" alt="Dog Food">
                <div class="add">
                    <p class = "atc">$30 - Family Dog</p>
                    <button id = "dog2" class="atcb2" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/cat food1.png" alt="Cat Food">
                <div class="add">
                    <p class = "atc">$30 - Hills</p>
                    <button class="atcb3" id = "cat1" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/cat food2.png" alt="cat food">
                <div class="add">
                    <p class = "atc">$30 - Purina</p>
                    <button id = "cat2" onclick="addProductToCart(this.id)" class="atcb4">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/bird food1.png" alt="bird food">
                <div class="add">
                    <p class = "atc">$30 -  Vita Pet</p>
                    <button id = "bird1" onclick="addProductToCart(this.id)" class="atcb5">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/bird food2.png" alt="bird food">
                <div class="add">
                    <p class = "atc">$30 - Energy Pellets</p>
                    <button id = "bird2" onclick="addProductToCart(this.id)" class="atcb6">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/rabbit food1.png" alt="rabbit food">
                <div class="add">
                    <p class = "atc">$30 - Value</p>
                    <button id = "rabbit1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/rabbit food2.png" alt="rabbit food">
                <div class="add">
                    <p class = "atc">$30 - KayTee</p>
                    <button id = "rabbit2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
                </div>
    </table>
</div>


<<div id="cartnav" class="cartnav">
    <a href="javascript:void(0)" class="closecart" onclick="closeCart()">&times;</a>
    <a href = "#">Your Cart</a>
    <table class="cartTable" id = "cart1"></table>
    <table class="cartTable" id = "cart2"></table>
    <table class="cartTable" id = "cart3"></table>
    <table class="cartTable" id = "cart4"></table>
    <table class="cartTable" id = "cart5"></table>
    <table class="cartTable" id = "cart6"></table>
    <table class="cartTable" id = "cart7"></table>
    <table class="cartTable" id = "cart8"></table>
    <table class = "total">
        <tr class="totalRow">
            <td class="totalWriting">TOTAL:</td>
            <td class="totalPrice" id = "total">$0.00</td>
        </tr>
    </table>
</div>

<button onclick="openCart()" class = "cart"><img class = "cartp" src="Images/Pictures/cart.png" alt="cart"></button>

<footer>
    <?php include ('Footer.php') ?>
</footer>



</body>
</html>