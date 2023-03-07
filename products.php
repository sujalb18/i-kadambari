<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-kadambari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .jumbotron{
        background-color: #80202b;
        color: white;
    }
    .goodfont{
        font-family: 'Montserrat', sans-serif;
    }
</style>

<body style="height: 100vh">
    <!--header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--header ends -->

    <div class="container" style="margin-top:65px">
        <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1 class="goodfont">Welcome to i-Kadambari Store</h1>
            <p>Our store empowers women by offering a selection of handmade products made by talented women artisans</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="watch">
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/products/krishna diary.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Krishna's Diary</h6>
                        <h6>Price : Rs 300</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<p><a href="#" class="btn btn-danger w-75  text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-danger w-75 text-white">Add to cart</a>
                                <p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/products/Handpainted1.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(2)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/products/handpainted2.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/products/Handpainted3.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(4)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                    to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/Handpainted4.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(5)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/Handpainted5.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(6)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/Handpainted6.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Hand Painted Wall Arts</h6>
                        <h6>Price : Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art1.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Decorative Plates</h6>
                        <h6>Price : Rs 250</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art2.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Festive Decoration</h6>
                        <h6>Price : Rs 160</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-danger w-75 text-white">Add to
                                        cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art3.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Festive Arts(Modaks)</h6>
                        <h6>Price : Rs 200(50rs per piece)</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                        to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art4.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Festive Arts(Modaks)</h6>
                        <h6>Price : Rs 60</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                        to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art5.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Decorative Art Carry Bag</h6>
                        <h6>Price : Rs 200</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                    to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="headphones">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art6.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Canvas Painting</h6>
                        <h6>Price : Rs 400</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(13)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                        to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art7.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Decorative Bottle Art</h6>
                        <h6>Price : Rs 450</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(14)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                    to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art8.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Canvas Painting</h6>
                        <h6>Price : Rs 400</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(15)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                    to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/products/art9.jpeg" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6>Embroided Decoration</h6>
                        <h6>Price : Rs 250</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart(16)) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                        to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--menu list ends-->
    <!-- footer-->
    <?php include 'includes/footer.php' ?>
    <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
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

</html>