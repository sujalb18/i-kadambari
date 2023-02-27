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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<style>
     body{
    background-color: rgb(240, 240, 240) ;
    }
    .fontsizeserv{
    background-color: rgb(240, 240, 240) ;
    }
</style>
<body>
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <div>
        <div class='container-fluid mainservicecont d-flex flex-column align-items-center '>
            <div class='my-4 ourserv d-flex flex-column align-items-center'>
                <div>
                    <h1>Our Services</h1>
                </div>
                <div>
                    
                    <p class='ourservp display-4'>Women entrepreneurs face unique challenges and barriers, including gender discrimination, lack of access to funding and resources, and societal expectations around gender roles. Despite these challenges, women entrepreneurs have made significant contributions to the global economy and have been recognized as key drivers of innovation and economic growth. Women entrepreneurs have been successful in a variety of industries, including technology, finance, healthcare, and creative industries. They have also been active in social entrepreneurship, using their businesses to address social and environmental challenges in their communities and beyond.    
                    </p>
                </div>
            </div>
        </div>

        <div class='d-grid servicecontainer m-auto'>

            <div class='grid-items'>
                <div class='my-2'>
                    <img src='images/beautyicon.png' alt="BGIMG" width='30px' height='40px' />
                </div>

                <div>
                    <b>
                        <p style="fontSize: 0.9rem" class="lowfontsize">Beauty Parlour for Women</p>
                    </b>
                </div>
            </div>

            <div class='grid-items '>
                <div class='my-2'>
                    <img src='images/yogaicon.png' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style=" fontSize: 0.9rem" class="lowfontsize">Yoga Teacher</p>
                        </a></b>
                </div>
            </div>


            <div class='grid-items'>
                <div class='my-2'>
                    <img src='images/danceicon.png' width='30px' height='40px' />
                </div>
                <div>
                    <b>
                        <p style="fontSize: 0.9rem" class="lowfontsize">Dance Classes</p>
                    </b>
                </div>
            </div>
            <div class='grid-items'>
                <div class='my-2'>
                    <img src='images/concerticon.png' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style="fontSize: 0.9rem" class="lowfontsize">Singing Classes</p>
                        </a></b>
                </div>
            </div>

            <div class='grid-items'>
                <div class='my-2'>
                    <img src='images/fooddonationicon.png' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style=" fontSize: 0.9rem" class="lowfontsize">Food Services</p>
                        </a></b>
                </div>
            </div>

            <div class='grid-items'>
                <div class='my-2'>
                    <img src='images/educationstudyicon.png' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style=" fontSize: 0.9rem" class="lowfontsize">Home Tuitions</p>
                        </a></b>
                </div>
            </div>

            <div class='grid-items'>
                <div class='my-2'>
                    <img src='https://uxwing.com/wp-content/themes/uxwing/download/banking-finance/financial-advisor-icon.svg' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style="fontSize: 0.9rem" class="lowfontsize">Business and Finance</p>
                        </a></b>
                </div>
            </div>

            <div class='grid-items'>
                <div class='my-2'>
                    <img src='https://uxwing.com/wp-content/themes/uxwing/download/medical-science-lab/healthcare-icon.svg' width='30px' height='40px' />
                </div>
                <div>
                    <b><a href='#' class='aref'>
                            <p style=" fontSize: 0.9rem" class="lowfontsize">Health Services</p>
                        </a></b>
                </div>
            </div>


        </div>
        <hr />
        <div class='container-fluid' id='danceLink'>
            <div class='DanceServices fontsizeserv'>
                <h4 class='display-4 fontsizeserv'>Our Services</h4>
            </div>

            <div class='d-flex justify-content-sm-around responsiveserv my-3'>
                <div>
                    <div>
                        <a href='performingarts.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/14106731/pexels-photo-14106731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Performing Arts</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='tutor.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/5905960/pexels-photo-5905960.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Private Tutor</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='investmentadvisor.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Business and Finance</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='healthservices.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/5215006/pexels-photo-5215006.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Health Services</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class='container-fluid' id='beautyLink'>
            <!-- <div class='BeautyServices'>
                    <h4 class='display-4 fontsizeserv'>About Beauty Services</h4>
                </div>  -->

            <div class='d-flex justify-content-sm-around responsiveserv my-3'>
                <div>
                    <div>
                        <a href='makeup.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/3089849/pexels-photo-3089849.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>MakeUp Artist</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='yoga.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/3984337/pexels-photo-3984337.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Yoga Instructor</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='nursingandcaretaking.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/6436284/pexels-photo-6436284.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Nursing and Caretaking</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href='cakesandbakery.php' class='aref'>
                            <div>
                                <img src='https://images.pexels.com/photos/7525168/pexels-photo-7525168.jpeg'
                                    class='servimages' width='300px' height='200px' />
                            </div>
                            <div class='my-3'>
                                <h5 class='servtitle'>Cakes and Bakery</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>

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