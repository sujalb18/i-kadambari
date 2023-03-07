<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ikadambari</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .videoofservprovider{
        width: 10vw;
    }
    .imageofservprovider{
        width: 15vw;
        height: 300px;
        margin-top: 30px;
    }
    @media screen and (max-width: 1055px) {
        .videoofservprovider{
            width: 20vw;
        }
    }

    @media screen and (max-width: 610px) {
        .videoofservprovider{
            width: 30vw;
        }
    }
</style>
<body>
    <?php
  include 'includes/header_menu.php';
  ?>

    <div>
        <div class='m-auto afterservices d-flex'>
            <div class="container servicess my-5 d-flex justify-content-center">
                <div class='my-5 mx-4 servicesdescpara'>
                    <h3 class='my-3'>Expressions By Vaidehi</h3>
                    <ul>
                        <li>Experience - 9 years</li>
                        <li>Location - Bhayender (East)</li>
                        <li>Charges - Bridel make-up starting Rs. 5000 and simple make-up staring Rs. 1000</li>
                    </ul>
                    <div class='w-100'>
                        <a href="appointment_page.php">
                        <button type="button" class="btn btn-danger appointmentbtn">Make an Appointment</button>
                        </a>
                    </div>
                </div>
                <div class='m-0 afterservvideo'>
                    <video src='./video/dance1.mp4' class="videoofservprovider" autoPlay loop muted></video>
                </div>
            </div>
        </div>
        <div class='m-auto afterservices d-flex'>
            <div class="container servicess my-5 d-flex justify-content-center">
                <div class='my-5 mx-4 servicesdescpara'>
                    <h3 class='my-3'>Singing classes and event programs Profession classical music and light music classes.</h3>
                    <ul>
                        <li>Experience - 8 years</li>
                        <li>Location - Dombivali</li>
                        <li>Charges - Rs. 400/- Per Session</li>
                    </ul>
                    <div class='w-100'>
                    <a href="appointment_page.php">
                        <button type="button" class="btn btn-danger appointmentbtn">Make an Appointment</button>
                    </a>
                    </div>
                </div>
                <div class='m-0 afterservvideo'>
                    <img src="./images/Singer (2).jpeg" class="imageofservprovider" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

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


</html>

</html>