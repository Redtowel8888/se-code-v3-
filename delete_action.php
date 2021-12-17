<?php
include('connection.php');
if(isset($_GET['delete_product']))
{
     $admin_id = $_GET['delete_product'];
  
   $query="DELETE FROM `bus` WHERE bus_id = $admin_id";
   $result=mysqli_query($db,$query);
   header('location:total_products.php'); 
}


    
  
if(isset($_GET['delete_user']))
{
     $user_id = $_GET['delete_user']; 
  
   $query="DELETE FROM `users` WHERE id = $user_id";
   $result=mysqli_query($db,$query);
   header('location:total_users.php'); 
}
if(isset($_GET['delete_admin']))
{
     $admin_id = $_GET['delete_admin'];
  
   $query="DELETE FROM `users` WHERE id = $admin_id";
   $result=mysqli_query($db,$query);
   header('location:total_admin.php'); 
}
if(isset($_GET['offer']))
{
     $offer = $_GET['offer'];
  
   $query="DELETE FROM `coupon_details` WHERE `detail_id` = '$offer'";
   $result=mysqli_query($db,$query);
   header('location:promo.php'); 
}
?>