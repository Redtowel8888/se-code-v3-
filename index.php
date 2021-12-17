<?php
require_once('connection.php');
require_once('admin_header.php');

?>
    <title>DASHBOARD</title>
            <!-- HEADER DESKTOP-->
          <style >
              #clickable {
  border: 0px solid black;
  height:100px;
  width:80px;
  display:inline-block;
}
          </style>
            <!-- MAIN CONTENT-->
               <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                               <?php
                                      $data="SELECT * FROM `user` where type != 'admin'";
                                      $query=mysqli_query($db,$data);
                                      $users=mysqli_num_rows($query);
                                      
                                       ?>
                                                <h2><?php echo $users ?></h2>
                                               <a href="$"> <span> CUSTOMERS </span></a>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                               <?php
                                      $data="SELECT * FROM `booking` ";
                                      $query=mysqli_query($db,$data);
                                      $pending_user=mysqli_num_rows($query);
                                      
                                       ?>
                                                <h2><?php echo $pending_user ?></h2>
                                                <a href="#"> <span> Booked Slots</span></a>
                                              
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                               <?php
                                      $data="SELECT * FROM `user` where type='admin'";
                                      $query=mysqli_query($db,$data);
                                      $admin=mysqli_num_rows($query);
                                      
                                       ?>
                                             <h2><?php echo $admin ?></h2>
                                               <a href="$"> <span> Admins/<br>Employees </span></a>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">

                                                <?php
                                      $data="SELECT * FROM `places` ";
                                      $query=mysqli_query($db,$data);
                                      $admin=mysqli_num_rows($query);
                                      
                                       ?>
                                             <h2><?php echo $admin ?></h2>
                                                <a href="$"> <span>Sites</span></a>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

           
                        </div>

                        <div class="row">
                           
                           
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
     
<?php
require_once('admin_footer.php');

?>
