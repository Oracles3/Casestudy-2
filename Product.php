<?php
    session_start();
    $database_name = "md5o42h5gjgc4hwo";
    $host = "c584md9egjnm02sk.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "i72ti2h0ftdurfnv";
    $password = "rgzhji46xu03zk51";
    $database = "md5o42h5gjgc4hwo";

    $con = new mysqli($host,$user,$password,$database );
?>



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
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Coding -->
    <button onclick="openCart()" class = "cart"><img class = "cartp" src="Images/Pictures/cart.png" alt="Cart"></button>


    <<!-- Pet food product coding -->
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
                <img class = "pimage" src="Images/Pictures/cat food2.png" alt="Cat Food">
                <div class="add">
                    <p class = "atc">$30 - Purina</p>
                    <button id = "cat2" onclick="addProductToCart(this.id)" class="atcb4">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/bird food1.png" alt="Bird Food">
                <div class="add">
                    <p class = "atc">$30 -  Vita Pet</p>
                    <button id = "bird1" onclick="addProductToCart(this.id)" class="atcb5">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/bird food2.png" alt="Bird Food">
                <div class="add">
                    <p class = "atc">$30 - Energy Pellets</p>
                    <button id = "bird2" onclick="addProductToCart(this.id)" class="atcb6">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/rabbit food1.png" alt="Rabbit Food">
                <div class="add">
                    <p class = "atc">$30 - Value</p>
                    <button id = "rabbit1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader"></p>
                <img class = "pimage" src="Images/Pictures/rabbit food2.png" alt="Rabbit Food">
                <div class="add">
                    <p class = "atc">$30 - KayTee</p>
                    <button id = "rabbit2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
                </div>
    </table>
</div>

<!-- Cart Coding -->
    <div style="clear: both"></div>
    <h3 class="title2">Shopping Cart Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value){
                        ?>

            <tr>
                <td><?php echo $value["item_name"]; ?></td>
                <td><?php echo $value["item_quantity"]; ?></td>
                <td>$ <?php echo $value["product_price"]; ?></td>
                <td>
                    $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                <td><a href="Product.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                            class="text-danger">Remove Item</span></a></td>
            </tr>

                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
            ?>

                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <th align="right">$ <?php echo number_format($total, 2); ?></th>
                        <td></td>
                    </tr>
                    <?php
                }
            ?>


<!-- Footer Coding -->
<footer>
    <?php include ('Footer.php') ?>
</footer>



</body>
</html>