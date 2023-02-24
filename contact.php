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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style='height: 100vh'>
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <div>
        <div class=' contactcs'>
            <h1 class='chead'>Contact Us</h1>
            <p class='chead'>In case you have any query, please do fill up the below form and we will get in touch
                with
                you as soon as possible. </p>

            <ul class='chead'>
                <li>TEL. +91 294 2454655, +91 7737627774</li>
                <li>EMAIL. ikadambari@life.ORG</li>
                <li>ADDRESS. Kanakia Rd, Kanakia Park, Mira Road, Mira Bhayandar, Maharashtra 401107</li>
            </ul>
            <form class='cf'>
                <div class='half left cf'>
                    <input class='cinput' type='text' placeholder='Name' name='user_name' />
                    <input class='cinput' type='email' placeholder='Email address' name='user_email' />
                </div>
                <div class='half right cf'>
                    <textarea class='ctextarea' name='message' type='text' placeholder='Message'></textarea>
                </div>
                <input class='cinput' type='submit' value='Submit' id='input-submit' />
            </form>
        </div>
    </div>

    <?php include 'includes/footer.php'?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>

</html>