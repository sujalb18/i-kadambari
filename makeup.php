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
                    <h1 class='my-3'>nishachauhan_makeovers</h1>
                    <ul>
                        <li>Experience - 9 years</li>
                        <li>Location - Bhayender (East)</li>
                        <li>Charges - Bridel make-up starting Rs. 5000 and simple make-up staring Rs. 1000</li>
                    </ul>
                    <!-- <p class='my-5 mx-4'>A beauty artist, also known as a makeup artist, is a skilled professional who
          specializes in enhancing a person's appearance through makeup application. These artists use their knowledge
          of colors, textures, and techniques to create a variety of looks that range from natural and understated to
          bold and dramatic. Whether working with models, actors, brides, or everyday people, beauty artists have the
          ability to transform a person's appearance and boost their confidence. They are skilled in creating flawless
          complexions, defining features, and accentuating natural beauty. In addition to their technical skills, beauty
          artists also possess strong communication skills, as they must listen to their clients' needs and preferences
          while also providing expert advice and recommendations. The work of a beauty artist is not only creative and
          artistic but also requires a keen attention to detail and a deep understanding of the human face and skin.</p> -->
                    <div class='w-100'>
                        <button type="button" class="btn btn-danger w-50">Make an Appointment</button>
                    </div>
                </div>
                <div class='my-4 w-25 m-0 d-flex justify-content-center'>
                    <video src='./video/makeupvideo.mp4' style="width: 10vw" autoPlay loop muted></video>
                </div>
            </div>
        </div>
    </div>
    <div class='w-75 m-auto afterservices d-flex'>
        <div class="container servicess my-5 d-flex justify-content-center">
            <div class='w-50 my-5 mx-4 servicesdescpara'>
                <h1 class='my-3'>Makeupby.dipika</h1>
                <ul>
                    <li>Experience - 14 years</li>
                    <li>Location - Mumbai</li>
                    <li>Charges - Vary</li>
                </ul>
                <!-- <p class='my-5 mx-4'>A beauty artist, also known as a makeup artist, is a skilled professional who
          specializes in enhancing a person's appearance through makeup application. These artists use their knowledge
          of colors, textures, and techniques to create a variety of looks that range from natural and understated to
          bold and dramatic. Whether working with models, actors, brides, or everyday people, beauty artists have the
          ability to transform a person's appearance and boost their confidence. They are skilled in creating flawless
          complexions, defining features, and accentuating natural beauty. In addition to their technical skills, beauty
          artists also possess strong communication skills, as they must listen to their clients' needs and preferences
          while also providing expert advice and recommendations. The work of a beauty artist is not only creative and
          artistic but also requires a keen attention to detail and a deep understanding of the human face and skin.</p> -->
                <div class='w-100'>
                    <button type="button" class="btn btn-danger w-50">Make an Appointment</button>
                </div>
            </div>
            <div class='my-4 w-25 m-0 d-flex justify-content-center'>
                <video src='./video/makupvideo2.mp4' style="width: 15vw" autoPlay loop muted></video>
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