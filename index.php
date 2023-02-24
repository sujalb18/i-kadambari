<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i Kadambari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="height: 100vh">
    <!--Header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    <div class='container-fluid d-flex flex-column align-items-center' style=" margin-top: 40px">
        <div>
            <h1>Empowering Women, Empowering India</h1>
        </div>

        <div>
            <p>iKadambari empowers women entrepreneurs by showcasing their unique products and services, made by women
                for India.</p>
        </div>

        <div>
            <video class='firstvideo'
                src='https://ikadambari-life.netlify.app/static/media/Video.7a73ed5fd27ed4865fa5.mp4' style={width='
                80%' height='500px' } autoPlay loop muted />
        </div>
        <br></br>
        <div class=" container my-5">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="aboutimg shadow m-0" style={margin-top='40px' }
                        src='https://ikadambari-life.netlify.app/static/media/we.87bd460fd7bf4de2dd62.jpeg' />
                </div>
                <div class="col-lg-6 aboutdesc">
                    <div class="mx-1">
                        <h1 class="display-4">About iKadambari</h1>
                        <p class="lead">Women' s skills in handicrafts and service sectors are an important part of
                            India's culture and economy. From traditional weaving and embroidery to modern technology
                            and
                            business management, women have been at the forefront of these industries for generations.
                            Their
                            skills and expertise not only provide a source of income for themselves and their families,
                            but
                            also contribute to the cultural and artistic heritage of the country. Empowering and
                            promoting
                            women's skills in these sectors can lead to greater economic and social opportunities for
                            women,
                            while also preserving and celebrating India's diverse cultural traditions.</p>
                        <a href="#" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <p></p>
        </div>
    </div>
    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php' ?>
    <!--footer end-->

</body>

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

</html>