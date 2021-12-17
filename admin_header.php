    <?php 

    include('session_admin.php');
    if(!isset($admin_check))
    {
    header("location:login.php"); // Redirecting To Profile Page
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title>Admin</title>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="shortcut icon" href="../img/123.png" type="image/x-icon">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->


        <!-- Fontfaces CSS-->
        <link href="assets/dashboard/css/font-face.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="assets/dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="assets/dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="assets/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="assets/dashboard/css/theme.css" rel="stylesheet" media="all">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
 
    <body class="no-scroll-y" style=" overflow-y: scroll;">

  
  <!-- Preloader -->

       
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="admin_panel.php">
                                <img src="../images/logo.png" alt="CMS" height="100" width="150" alt="CMS" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                          <li>
                                <a href="index.php">
                                   <i> </i> DASHBOARD</a>
                            </li>

                           <li>
                                <a href="total_users.php">
                                    <i> </i>TOTAL USERS</a>
                            </li>
                           <li>
                                        <a href="total_admin.php"><i>  </i> Administrators</a>
                                    </li>
                             <li>
                                <a href="add_admins.php"><i> </i>ADD Admins</a>
                            </li>
                             <li>
                                <a href="total_orders.php">
                                  <i> </i>  Booked Seats</a>
                            </li>
                           
                                </ul>
                            
                           
                           
                        
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="index.php" style="color: black">
                      <img src="../images/logo.png" alt="CMS" height="80" width="150" alt="Grocery" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                               <li>
                                <a href="index.php">
                                   <i> </i> DASHBOARD</a>
                            </li>
<li>
                                <a href="add_products.php">
                                   <i> </i> Add Places</a>
                            </li>
                            <li>
                    
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                 <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..."  style="display: none" />
                                <button class="au-btn--submit" type="submit" style="display: none;">
                                    
                                </button>
                            </form>
                            <div class="header-button ">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                              <img src="../img/<?php echo $row['image']?>" alt="" /> 
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $row['name']?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/logo.png" alt="" /> 
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $row['name']?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $row['email']?></span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php" >
                                                  <span style="margin-left: 90px">  <i class="zmdi zmdi-power"></i>Logout </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
            </header>

