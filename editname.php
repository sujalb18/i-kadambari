<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>i-Kadambari</title>
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    require("includes/common.php");
    ?>
</head>

<body>
    <?php

    $query = "SELECT * FROM users where id = '$_SESSION[user_id]'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="loginheading">
                <h4 style='margin-bottom:30px'>Change Your Name</h4>
            </div>
            <div class="editname">
                <form action="edit_namescript.php" method="post">
                    <p>If you want to change the name associated with your Amazon customer account, you may do so below. Be sure to click the  <b>Save Changes</b> button when you are done.</p>
                    <p><b>New Name</b></p>
                    <input type="text" id="newfname" name="newfname" value="<?php echo $row['first_name']?>">
                    <input type="text" id="newlname" name="newlname" value="<?php echo $row['last_name']?>">
                    <div class='savechanges'>
                        <button class="btn btn-danger">Save Changes</button>
                    </div>
                </form>
            </div>    
            <?php
        }
    }
    ?>
<?php include 'includes/footer.php' ?>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
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

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

</script>