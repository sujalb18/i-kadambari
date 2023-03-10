<style>
.navcolor {
    background-color: #80202b;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu {
    border: none;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #f8f9fa;
}

.dropdown-item:hover {
    background-color: #e9ecef;
    color: #343a40;
}
</style>

<nav class="navbar navbar-expand-lg d-flex navbar-dark navcolor">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <img src={IkLogo} className='navbar-brand m-2' width={'200px'}></img> -->
            <a class="navbar-brand" href="#">iKadambari |</a>
        </div>

        <div class='w-50 mx-5'>
            <form class="collapse navbar-collapse" role="search" id="navbarSupportedContent">
                <input class="form-control d-none d-lg-block" type="search" style='width=70%' placeholder="Search"
                    aria-label="Search" />
                <button class="btn btn-outline-danger mx-2 d-none d-lg-block" type="submit">Search</button>
            </form>
        </div>

        <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item mx-1">
                    <a class="nav-link " href="/login">Login</a>
                    <ul class="dropdown-menu mx-1 hover-effect">
                        <li><a class="dropdown-item  dropdown-content" href="#">Signup</a></li>
                        <li><a class="dropdown-item  dropdown-content" href="#">Login</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="products.php" role="button" aria-expanded="false">Product
                    </a>
                    <ul class="dropdown-menu hover-effect">
                        <li><a class="dropdown-item dropdown-content" href="#"><b><i>Categories</i></b></a></li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item  dropdown-content" href="#">Handicrafts</a></li>
                        <li><a class="dropdown-item dropdown-content" href="#">Wall Arts</a></li>
                        <li><a class="dropdown-item dropdown-content" href="#">Jewellery</a></li>
                        <li><a class="dropdown-item dropdown-content" href="#">Textiles</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item dropdown-content" href="#"><b><i>Materials</i></b></a></li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                    </ul>
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
        ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="logout_script.php" class="nav-link"><i
                                class="fa fa-sign-out"></i>Logout</a></li>
                    <li class="nav-item"><a class="nav-link " data-placement="bottom" data-toggle="popover"
                            data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i
                                class="fa fa-user-circle "></i></a></li>
                </ul>
                <?php
      } else {
        ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="modal"><i
                                class="fa fa-user"></i>Sign up</a></li>
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
                    <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
                </form>
                <a href="http://">forgot password ?</a>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal">signup</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already Registered?<a href="#login" data-toggle="modal"
                        data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Signup trigger model ends-->