<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-Kadambari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>


<body style="height: 100vh">
    <!--Header-->
    <style>
        /* Slideshow container */
        .slideshow-container {
        position: relative;
        background: #f1f1f1f1;
    }

    body{
    background: url('./images/backgroundimagebody.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    height: 50vh;
           
    }
    /* Slides */
    .mySlides {
        display: none;
        padding: 80px;
        text-align: center;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -30px;
        padding: 16px;
        color: #888;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        transition: 0.6s ease;
    }

    /* Position the "next button" to the right */
    .next {
        position: absolute;
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
    }

    /* The dot/bullet/indicator container */
    .dot-container {
        text-align: center;
        padding: 20px;
        background: #ddd;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    /* Add a background color to the active dot/circle */
    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Add an italic font style to all quotes */
    q {
        font-style: italic;
    }

    /* Add a blue color to the author */
    .author {
        color: cornflowerblue;
    }
    .firstvideo{
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>

    <div class='container-fluid d-flex flex-column align-items-center' style=" margin-top: 40px">
        <div >
            <h1 class="hero">Empowering Women, Empowering India</h1>
        </div>

        <div>
            <p class="subpara">i-Kadambari empowers women entrepreneurs of India by showcasing their unique products and services .</p>
        </div>

        <div class="m-auto d-flex justify-content-center">
            <video class='firstvideo'
                src='./video/startingvideo.mp4' autoPlay loop muted />
        </div>
        <br></br>
        <div class=" container my-5">
            <div class="row" >
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="aboutimg shadow m-0" style='border-radius:4px' id="imghome"
                        src='https://ikadambari-life.netlify.app/static/media/we.87bd460fd7bf4de2dd62.jpeg' />
                </div>
                <div class="col-lg-6 aboutdesc">
                    <div class="mx-1" style="padding: 0px 30px 0px">
                        <h1 class="ab2" >About i-Kadambari</h1>
                        <p class="lead" style="text-align:justify;"><i>Kadambari is a name that suggests you to give what you want so other people can have what they need.</i> Women' s skills in handicrafts and service sectors are an important part of India's culture and economy. From traditional weaving and embroidery to modern technology and business management, women have been at the forefront of these industries for generations. Their skills and expertise not only provide a source of income for themselves and their families,but also contribute to the cultural and artistic heritage of the country. Empowering and promoting women's skills in these sectors can lead to greater economic and social opportunities for women, while also preserving and celebrating India's diverse cultural traditions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <p></p>
        </div>  
    </div>

    <div class="slideshow-container">

        <div class="mySlides">
            <q>I wanted to stand for those women who want to be beautiful for themselves, not for men or other women.</q>
            <p class="author">- Falguni Nayar, Founder of Nykaa</p>
        </div>

        <div class="mySlides">
            <q>When you know you have to fend for yourself every inch of the way, it gives you a different kind of grit and tenacity</q>
            <p class="author">- Shradha Sharma, the Founder, and CEO of YourStory</p>
        </div>

        <div class="mySlides">
            <q>I was faced with questions like can you do it? Gladly, things are changing and now, they can see me doing it</q>
            <p class="author">- Sairee Chahal, SHEROES</p>
        </div>

        <div class="mySlides">
            <q>Aim for the sky, but move slowly, enjoying every step along the way.</q>
            <p class="author">- Chanda Kochhar, CEO ICICI Bank</p>
        </div>

        <div class="mySlides">
            <q>To be a CEO is a calling. You should not do it because it is a job. It is a calling, and you have got to be involved in it with your head, heart and hands. Your heart has got to be in the job; you got to love what you do; it consumes you.</q>
            <p class="author">- Indra Nooyi, Former CEO OF PEPSI</p>
        </div>

        <!-- Next/prev buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots/bullets/indicators -->
    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
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