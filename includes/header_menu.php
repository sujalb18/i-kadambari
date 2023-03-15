<!-- <?php
session_start();

?> -->
<style>
.navcolor {
    background-color: #80202b;
}

@media screen and (max-width: 1000px) {
    #logoimage{
        margin-left:30px;
    }
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


<nav class="navbar navbar-expand-lg d-flex navbar-dark navcolor">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php">
            <img src="./images/Ikadambari logo-07.jpg" id='logoimage'  style="object-fit:cover;width:80px" alt="" >
            </a>
        </div>

        <div class='w-50 mx-5'>
            <form class="collapse navbar-collapse" role="search" id="navbarSupportedContent">
                <input class="form-control d-none d-lg-block" type="search" style='width=70%' placeholder="Search"
                    aria-label="Search" />
                <button class="btn btn-outline-danger mx-2 d-none d-lg-block" type="submit">Search</button>
            </form>
        </div>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="button" aria-expanded="false" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php" role="button" aria-expanded="false">Product
                    </a>
                
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php
        if (isset($_SESSION['email'])) {
          ?>
                <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <?php
        }
        ?>
                <?php
      if (isset($_SESSION['email'])) {
                 require("common.php");
                    $query = "SELECT * FROM users where id = '$_SESSION[user_id]'";
                    $result = mysqli_query($con, $query);
                    
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo 
                            "<ul class='nav navbar-nav d-flex'>
                            <a href='accountprofile.php' class='nav-link' style='padding-right:0'>
                            <i class='fa-sharp fa-solid fa-user navicon' style='color:white;'></i><li class='nav-item'>
                            $row[first_name]</a></li>
                        </ul>";
                        }
                    }
                ?>
                
                <?php
      } else {
        ?>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="modal"><i
                                class="fa fa-user mx-1"></i>Sign up</a></li>
                    <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i
                                class="fa fa-sign-in"></i>
                            Login</a></li>
                </ul>
                <?php
      }
      ?>
            </ul>

            <!-- test -->

        </div>
    </div>
</nav>


<!--navigation bar end-->
<!--Login trigger Modal-->
<div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="lemail" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="lpassword" placeholder="Password"
                            required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label for="checkbox" class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" name="Submit" style="
                        width: 100%;">Login</button>
                </form>
                <a href="http://">Forgot Password ?</a>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal">Sign up</a></p>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Login trigger Model ends-->
<!--Signup model start-->
<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="eMail" placeholder="Enter email" required>
                        <?php if (isset($_GET['error'])) {
              echo "<span class='text-danger'>" . $_GET['error'] . "</span>";
            } ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Password"
                            required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="firstName"
                                placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md -6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="lastName"
                                placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" name="Submit" style="
                        width: 100%;">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already Registered?<a href="#login" data-toggle="modal"
                        data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Signup trigger model ends-->