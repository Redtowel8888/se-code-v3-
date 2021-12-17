<?php
include('connection.php');


if(isset($_GET['deliver_order']))
{
   $order_id = $_GET['deliver_order'];
   $query="UPDATE `booked` SET `payment`='Done' WHERE `book_id`='$order_id'";
   $result=mysqli_query($db,$query);
   header('location:total_orders.php'); 
}





?>