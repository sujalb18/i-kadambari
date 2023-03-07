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
    <!-- <title>Planet Shopify | Online Shopping Site for Men</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style='height = 100vh'>
    <?php
    include 'includes/header_menu.php';
    ?>
    <div class="d-flex justify-content-center">
        <div class=" col-md-6  my-5 table-responsive p-5">
            <table class="table table-striped table-bordered table-hover ">
                <?php
                $price = 0;
                $user_id = $_SESSION['user_id'];

                $query = " SELECT users_products.quantity as Quantity, products.price AS Price, products.id, products.name AS Name FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";

                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) >= 1) {
                    ?>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {

                        $price += $row["Price"];
                        $name = $row["Name"];
                        $quantity = $row["Quantity"];
                        $sum = 1;


                        echo "<div class='items-body'>
                        
                            
                            <div class='row cart-item'>
                            <div class='col-md-3'>
                                <img class='img-fluid' src='./images/krishna diary.jpeg' />
                            </div>
                                <div class='col-md-3 col-sm-3 col-xs-3 col-3' style='padding:2%'>
                                    <h5 class='text-style-1'>$name</h5>
                                    <p class='text-style-2'>Rs.$price</p>
                                    <div class='wrapper'>
                                    <button class='btn btn-danger' style='width:2vw' type='button'>-</button>
                                    <span class='num mx-2' id='quantities'>$quantity</span>
                                    <button class='btn btn-danger' style='width:2vw' onclick='plus($quantity)' type='button'>+</button>
                                 </div>
                    
                                </div>
            
                                <div class='col-md-2 col-sm-3 col-xs-3 col-3' style='padding:2%'>
                                    <h5 class='text-style-2'>Total</h5>
                                    <p class='text-style-4'>Rs $price</p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                    </tbody>
                    <?php
                } else {
                    echo "<div> <img src='images/emptycart.png' class='image-fluid' height='150' width='150'></div><br/>";
                    echo "<div class='text-bold  h5'>Add items to the cart first!<div>";
                }
                ?>
                <div class='container py-4'>
                    <div>
                        <a href="appointment_page.php">
                            <button class='btn btn-danger custom-btn' type='button'>Confirm Order</button>
                        </a>
                    </div>
                </div>
                </tbody>
            </table>
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