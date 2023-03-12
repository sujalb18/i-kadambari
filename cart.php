<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<style>
    .cartcontainer {
        width: 70%;
        margin: 20px;
        background-color: white;
        padding: 15px;
    }

    .proceedtobuycontainer {
        width: 25%;
        margin: 20px;
        background-color: white;
        padding: 15px;
        height: 200px;

    }

    body {
        background-color: #FDEBED;
    }

    .quantitybtn {
        border: none;
        border-radius: 5px;
        padding:5px;
        box-shadow: 2px 2px 2px 1px rgba(0.2, 0.2, 0.2, 0.2);
    }

    @media screen and (max-width: 1140px) {
        .maincartcontainer{
            flex-direction: column;
        }

        .productcart{
            flex-direction: column;
        }

        .productdescription{
            margin-top: 20px;
        }

        .productprice{
            margin: 30px 10px;
        }
    }
</style>

<body style='height = 100vh'>


    <?php
    include 'includes/header_menu.php';
    ?>
    <div class="maincartcontainer d-flex">
        <div class="cartcontainer">
            <h3>Shopping Cart</h3>
            <hr noshade="noshade">
            <?php
            $price = 0;
            $user_id = $_SESSION['user_id'];

            
            $query = "SELECT quantity AS quantity, products.price AS Price, products.id AS id, products.image as image, products.name AS Name FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
            $total = 0;
            
            
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) >= 1) {
                ?>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    
                    $price = $row["Price"];
                    $name = $row["Name"];
                    $image = $row["image"];
                    $quantity = $row['quantity'];
                    
                ?>

                <div class="productcart d-flex w-100 my-3">
                    <div class='productimage mx-2 w-25'>
                        <img src="./images/products/<?php echo $image ?>" width="200px" height='150px'>
                    </div>
                    <div class='productdescription mx-2 w-50'>
                        <h5>
                            <?php echo $name ?>
                        </h5>
                        <p style="font-size:0.9rem">In Stock</p>
                        <button class="dropdown-toggle quantitybtn" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qty: <?php echo $row['quantity']?></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 1?>">1</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 2?>">2</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 3?>">3</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 4?>">4</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 5?>">5</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 6?>">6</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 7?>">7</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 8?>">8</a>
                            <a class="dropdown-item" href="updatevalue.php?id=<?php echo $row['id']?>&quantity=<?php echo 9?>">9</a>
                        </div>
                        <?php
                            $price *= $quantity; 
                            $total += $price;
                        ?>
                        
                        <a href="cart-remove.php?id=<?php echo $row['id']?>" class='mx-3'>Delete</a>
                    </div>
                    <div class='productprice w-25'>
                        <b style="font-size:20px">Price: ₹<?php echo $price ?></b>
                    </div>
                </div>
                <hr noshade="noshade">
                
                <?php
                }
                ?>
                <?php
            } else {
                echo "<div class='d-flex flex-column' style='align-items:center'> 
                                <img src='./images/nothingcart.png' height='150' width='150'>
                                <h2 style='margin-top:40px'> Add items to the cart first!</h2>
                          </div>
                          <div class='py-4'>
                            <div class='m-auto d-flex justify-content-center'>
                                <a href='products.php' class='w-50'>
                                <button class='btn btn-danger custom-btn w-100' type='button'>Add Items</button>
                                </a>
                            </div>
                        </div>";
            }
            
            ?>
        
        </div>


        <div class='proceedtobuycontainer'>
                    <div class="d-flex">
                    <img src="./images/green-checkmark-icon.png" class="mx-1" width="30px" height="30px" alt="">
                    <p style='color:#067D62'>Your order is eligible for FREE Delivery. Select this option at checkout.</p>
                    </div>
        
                    <p><b style="font-size:20px">Total Price: <?php echo $total ?></b></p>
                    <a href="appointment_page.php"><button type='button' class="btn btn-danger">Proceed to Checkout</button></a>
                </div>
    </div>

    </div>
    <!--footer -->
    <?php include 'includes/footer.php' ?>
    <!--footer end-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(' [data-toggle="popover" ]').popover();
    });
    $(document).ready(function () {
        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }
    });
</script>


<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<!-- <script>
    function plus(quantity) {
        <?php


        if (mysqli_num_rows($result1) >= 1) {

        }

        ?>
        document.getElementById('quantities').innerHTML = quantity;
        console.log(quantity);
    }
</script> -->

</html>