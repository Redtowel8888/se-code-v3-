<?php include 'header2.php'; ?>
<head><title>Crud Page</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<h1 style="text-align: center;">ALL Your Bookings</h1>
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Post Code</th>
      <th scope="col">Model</th>
      <th scope="col">Color</th>
      <th scope="col">Registration#</th>
       <th scope="col">Spot</th>
       <th scope="col">Price</th>
       <th scope="col">Hours</th>
       <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql="SELECT * FROM `booking`";
      $ex = mysqli_query($db,$sql);
      $num1= mysqli_num_rows($ex);
        while ($fet = mysqli_fetch_assoc($ex)) {
          
          ?>
   
    <tr>
      <td ><?php echo $fet['user_name']; ?></td>
      <td><?php echo $fet['email']; ?></td>
      <td><?php echo $fet['phone']; ?></td>
      <td><?php echo $fet['post']; ?></td>
       <td><?php echo $fet['model']; ?></td>
      <td><?php echo $fet['color']; ?></td>
       <td><?php echo $fet['register']; ?></td>
       <td><?php echo $fet['place']; ?></td>
       <td>$<?php echo $fet['parking_price']; ?>/hour</td>
       <td><?php echo $fet['hours']; ?></td>
       <td>$<?php echo $fet['total_cost']; ?></td>
    </tr>
  <?php
   
      }
    ?>
  </tbody>
</table>
</div>


<?php include 'footer.php'; ?>