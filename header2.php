<?php include 'connection.php'; 
include'session.php';
    if(!isset($user_check))
    {
    header("location:login.php?Invalid=Please Login First"); // Redirecting To Profile Page
    }
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parking</title>

	<link rel="shortcut icon" href="assets/images/logo/red-car-5313.png">
	<link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.png">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/vendors/menu/src/main.menu.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/utilities.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors-gh.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors-g.css">

	<!-- CAROUSEL -->
	<link rel="stylesheet" href="assets/vendors/owl.carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/vendors/owl.carousel/owl.theme.default.min.css">

	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/animate/animate.css">

	<!-- ANIMATED HEADLINES -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/animated-headline/css/style.css">

	<!-- FANCY BOX -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/fancybox/jquery.fancybox.min.css">

</head>
<body>

	<div class="main-header header-shadow cherry-header">
	    <div class="bg-cherry">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 col-md-12">
	                    <div class="text-white mt-10 text-center--md text-center--sm text-center--xs">
	                        Helpline 0123456789
	                    </div>
	                </div>
	                <div class="col-lg-6 col-md-12">
	                    <div class="text-right text-center--md text-center--sm text-center--xs">
	                        <span class="text-white mt-8 pl-20 pr-20 d-inline-block">
	                            Welcome  <span class="text-bold-600"><?php echo $row['name'] ?></span>
	                        </span>
	                        <a class="btn btn-white text-cherry text-size-11 text-bold-600 mt-5 mb-5 mt-10--md mb-10--md mt-10--sm mb-10--sm mt-10--xs mb-10--xs text-uppercase" href="my-bookings.php"><i class="zmdi zmdi-account-o text-size-15 mr-6 float-left mt-1"></i>my Bookings</a>
	                        <a class="btn btn-white text-cherry text-size-11 text-bold-600 mt-5 mb-5 mt-10--md mb-10--md mt-10--sm mb-10--sm mt-10--xs mb-10--xs text-uppercase" href="logout.php"><i class="zmdi zmdi-power text-size-15 mr-6 float-left mt-1"></i>Logout</a>
	                        <!--  -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<div class="container">

			<div class="main-header-container">

				<div class="logo" data-mobile-logo="assets/images/logo/logo-dark.png" data-sticky-logo="assets/images/logo/logo-darki.png">
					<a href="index2.php"><img src="assets/images/logo/logo-darki.png" alt="logo"/></a>
				</div> <!-- /LOGO -->

				<div class="burger-menu">
					<div class="line-menu line-half first-line"></div>
					<div class="line-menu"></div>
					<div class="line-menu line-half last-line"></div>
				</div> <!-- /BURGER MENU -->

				<nav class="main-menu menu-caret menu-hover-2 submenu-top-border submenu-scale">
					<ul>
						<li class="current-menu"><a href="index2.php">Home</a></li>
						
					<li><a href="parking2.php">Parking</a></li>
						
						</li>
						<li><a href="booking.php">Booking</a></li>
						
						</li>
					
						
						<li><a href="booking-confirm.php">Booking Confirm</a></li>
					</ul>
				</nav> <!-- NAVIGATION MENU -->

			</div> <!-- /HEADER CONTAINER -->

		</div> <!-- /CONTAINER -->
	</div> <!-- /HEADER -->