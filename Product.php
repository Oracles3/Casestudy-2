<?php
    session_start();
    $database_name = "Product_details";
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
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
        <?php
        $query = "SELECT * FROM product ORDER BY id ASC ";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

                ?>
                <div class="col-md-3">

                    <form method="post" action="Product.php?action=add&id=<?php echo $row["id"]; ?>">

                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                            <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                   value="Add to Cart">
                        </div>
                    </form>
                </div>
                <?php
            }
        }
        ?>

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
                    foreach ($_SESSION["cart"] as $key => $value) {
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
            </table>
        </div>

    </div>


<!-- Footer Coding -->
<footer>
    <?php include ('Footer.php') ?>
</footer>



</body>
</html>