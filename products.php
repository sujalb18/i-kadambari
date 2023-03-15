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
</head>
<style>
    .jumbotron{
        background-color: #80202b;
        color: white;
    }
    .goodfont{
        font-family: 'Montserrat', sans-serif;
    }

    .maincard{
        margin: 10px;
    }

    @media screen and (max-width: 1200px) {
        .maincard{
        margin: 30px;
    }

    @media screen and (max-width: 991px) {
        .maincard{
        margin: 30px 50px;
    }

    @media screen and (max-width: 770px) {
        .maincard{
        margin: 30px auto;
        }
    }
</style>

<body style="height: 100vh">
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>

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


            <!-- Mycode -->
            <?php
            require ("includes/common.php");
            $query = "SELECT * FROM `products`";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
             ?>
            <div class=" maincard">
                <div class="card">
                    <img src="images/products/<?php echo $row['image'] ?>" alt="" class="img-fluid pb-1" style="width: 253.33px; height: 298px">
                    <div class="figure-caption">
                        <h6><?php echo $row['name'] ?></h6>
                        <h6>Price : <?php echo $row['price'] ?></h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-danger w-75 text-white ">Add To Cart</a>
                            </p>
                        <?php
                        } else {
                            if (check_if_added_to_cart($row['id'] )) {
                                echo '<p><a href="#" class="btn btn-danger w-75 text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p> <a href="cart-add.php?id=<?php echo $row['id'] ?>" name="add" value="add" class="btn btn-danger w-75 text-white">Add
                                        to cart</a></p>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
                        <?php
        }
    }
    ?>
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