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

<body>
    <?php
  include 'includes/header_menu.php';
  ?>

    <div>
        <div class='w-75 m-auto afterservices d-flex'>
            <div class="container servicess my-5 d-flex justify-content-center">
                <div class='w-50 my-5 mx-4 servicesdescpara'>
                    <h3 class='my-3'>Expressions By Vaidehi</h3>
                    <ul>
                        <li>Experience - 9 years</li>
                        <li>Location - Bhayender (East)</li>
                        <li>Charges - Bridel make-up starting Rs. 5000 and simple make-up staring Rs. 1000</li>
                    </ul>
                    <div class='w-100'>
                        <button type="button" class="btn btn-danger w-50">Make an Appointment</button>
                    </div>
                </div>
                <div class='my-4 w-25 m-0 d-flex justify-content-center'>
                    <video src='./video/dance1.mp4' style="width: 10vw" autoPlay loop muted></video>
                </div>
            </div>
        </div>
        <div class='w-75 m-auto afterservices d-flex'>
            <div class="container servicess my-5 d-flex justify-content-center">
                <div class='w-50 my-5 mx-4 servicesdescpara'>
                    <h3 class='my-3'>Singing classes and event programs Profession classical music and light music classes.</h3>
                    <ul>
                        <li>Experience - 8 years</li>
                        <li>Location - Dombivali</li>
                        <li>Charges - Rs. 400/- Per Session</li>
                    </ul>
                    <div class='w-100'>
                        <button type="button" class="btn btn-danger w-50">Make an Appointment</button>
                    </div>
                </div>
                <div class='my-4 w-25 m-0 d-flex justify-content-center'>
                    <img src="./images/Singer (2).jpeg" style="width:12vw" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
$(document).ready(function() $('[data-toggle="popover"]').popover(););
$(document).ready(function()

    if (window.location.href.indexOf('#login') != -1)
        $('#login').modal('show');
);
</script>


</html>

</html>