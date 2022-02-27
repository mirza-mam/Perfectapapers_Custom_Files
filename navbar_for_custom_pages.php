<!-- New Nav Starts -->
<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

    switch ($_SESSION['role_id']) {

            //If User's role_id == 0 then user will be redirected to the User Dashboard
        case 0:
            $Destination_Dashboard_Url = 'User-Dashboard/user-dashboard-index.php';
            break;
            //If User's role_id == 1 then user will be redirected to the Employee Dashboard
        case 1:
            $Destination_Dashboard_Url = 'Emp-Dashboard/emp-dashboard-index.php';
            break;
            //If User's role_id == 2 then user will be redirected to the Admin Dashboard
        case 2:
            $Destination_Dashboard_Url = 'Admin-Dashboard/admin-dashboard-index.php';
            break;
    }


?>


    <!-- ****************** Navigation Bar For Logged In Users***************************** -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light navbar_customs">

            <div class="navbar_Brand_Img"> 
            <a class="navbar-brand" href="https://perfectapapers.com">
            <img src="custom-assets/images/logo-for-navbar.jpg" width="50%">
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/samples/">Samples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/writers/">Writers</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://perfectapapers.com/pricing/">Pricing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order-now.php">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/faq/">FAQ's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/why-us/">Why Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/reviews/">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/privacy-policy/">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/contact-us/">Contact Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target="_blank" href="<?php echo $Destination_Dashboard_Url; ?>"><em class="fa fa-tachometer mr-1"></em>Dashboard</a>

                            <a class="dropdown-item" href="includes/logout.php?logout_btn=true"><em class="fa fa-power-off mr-1"></em> Logout</a>
                        </div>
                    </li>

                </ul>

             
            </div>

        </nav>
    </div>
    <!-- ******************//Navigation Bar For Logged In Users***************************** -->

    <section class="Order_Now_Wall_sect">
		<span class="btn btn-dark"> <a href="order-now.php" class="text-light"> ORDER NOW! </a> </span>
		<h1> FOR THE BEST WRITING SERVICES BECAUSE THE CLOCK IS TICKING DOWN </h1> 
    </section>

<?php  } else { ?>


    <!-- ******************Navigation Bar For Logged Out Users***************************** -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light navbar_customs">

            <div class="navbar_Brand_Img"> 
            <a class="navbar-brand" href="https://perfectapapers.com">
            <img src="custom-assets/images/logo-for-navbar.jpg" width="50%">
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/samples/">Samples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/writers/">Writers</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://perfectapapers.com/pricing/">Pricing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order-now.php">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/faq/">FAQ's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/why-us/">Why Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/reviews/">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/privacy-policy/">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://perfectapapers.com/contact-us/">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="signup_form.php"><em class="fa fa-user-plus mr-1"></em>Sign Up</a>
                            <a class="dropdown-item" href="login_form.php"><em class="fa fa-sign-in mr-1"></em>Login</a>
                        </div>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
    <!-- ******************//Navigation Bar For Logged Out Users***************************** -->

    <section class="Order_Now_Wall_sect">
		<span class="btn btn-dark"> <a href="order-now.php" class="text-light"> ORDER NOW! </a> </span>
		<h1> FOR THE BEST WRITING SERVICES BECAUSE THE CLOCK IS TICKING DOWN </h1> 
    </section>

<?php
}

?>

