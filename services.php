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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    include 'includes/header_menu.php';
    ?>
    <div>
            <div class='container-fluid mainservicecont d-flex flex-column align-items-center'>
                <div class='my-4 ourserv d-flex flex-column align-items-center'>
                    <div>
                        <h1>Our Services</h1>
                    </div>
                    <div>
                        <p class='ourservp display-4'>Women are more fit for social service than men. They are the incarnation of Ahimsa, the very picture of love. They can charge the society by filling the milk of human kindness in their children. The lap of mother is the first and the best school of every human being. Women is the maker of man. Let her make man real human being. A lady teacher does more than a male teacher. The nurses and lady doctors are doing service to the suffering humanity.</p>
                    </div>
                </div>
            </div>

            <div class='d-grid servicecontainer m-auto'>

                    <div class='grid-items'>
                        <div class='my-2'>
                            <img src='images/beautyicon.png' alt="BGIMG" width='30px' height='40px' />
                        </div>

                        <div>
                            <b><p style=  "fontSize: 0.9rem" >Beauty Parlour for Women</p></b>
                        </div>
                    </div>

                    <div class='grid-items '>
                        <div class='my-2'>
                            <img src='images/yogaicon.png' width='30px' height='40px' />
                        </div>
                        <div>
                            <b><a href='#' class='aref'><p style= " fontSize: 0.9rem" >Yoga Teacher</p></a></b>
                        </div>
                    </div>


                    <div class='grid-items'>
                        <div class='my-2'>
                            <img src='images/danceicon.png' width='30px' height='40px' />
                        </div>
                        <div>
                            <b><p style= "fontSize: 0.9rem" >Dance Classes</p></b>
                        </div>
                    </div>
                <div class='grid-items'>
                    <div class='my-2'>
                        <img src='images/concerticon.png' width='30px' height='40px' />
                    </div>
                    <div>
                        <b><a href='#' class='aref'><p style="fontSize: 0.9rem" >Singing Classes</p></a></b>
                    </div>
                </div>

                <div class='grid-items'>
                    <div class='my-2'>
                        <img src='images/fooddonationicon.png' width='30px' height='40px' />
                    </div>
                    <div>
                        <b><a href='#' class='aref'><p style= " fontSize: 0.9rem" >Food Services</p></a></b>
                    </div>
                </div>

                <div class='grid-items'>
                    <div class='my-2'>
                        <img src='images/educationstudyicon.png' width='30px' height='40px' />
                    </div>
                    <div>
                        <b><a href='#' class='aref'><p style= " fontSize: 0.9rem" >Home Tuitions</p></a></b>
                    </div>
                </div>
                
                
            </div>
            <hr />
            <div class='container-fluid' id='danceLink'>
                <div class='DanceServices'>
                    <h4 class='display-4 fontsizeserv'>Our Services</h4>
                </div>

                <div class='d-flex responsiveserv justify-content-sm-around my-3'>
                    <div>
                        <div>
                            <a href='performingarts.php' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/8752654/pexels-photo-8752654.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' 
                                    />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>Performing Arts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/tutor' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/5905960/pexels-photo-5905960.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>Private Tutor</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/investad' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>Investment Advisory</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/dentalclinic' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/5215006/pexels-photo-5215006.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
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

                <div class='d-flex responsiveserv justify-content-sm-around my-3'>
                    <div>
                        <div>
                            <a href='/servicesdesc' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/3089849/pexels-photo-3089849.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>MakeUp Artist</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/makeup2' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/3984337/pexels-photo-3984337.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>Yoga Instructor</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/servicesdesc' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/6436284/pexels-photo-6436284.jpeg?auhref=compress&cs=tinysrgb&w=1260&h=750&dpr=1' class='servimages' width='300px' height='200px' />
                                </div>
                                <div class='my-3'>
                                    <h5 class='servtitle'>Nursing and Caretaking</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href='/cake' class='aref'>
                                <div>
                                    <img src='https://images.pexels.com/photos/7525168/pexels-photo-7525168.jpeg' class='servimages' width='300px' height='200px' />
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



</body>




<?php include 'includes/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () 
        $('[data-toggle="popover"]').popover();
    );
    $(document).ready(function () 

        if (window.location.href.indexOf('#login') != -1) 
            $('#login').modal('show');
        

    );
</script>


</html>