<?php

include 'connection.php';

if (isset($_POST['book'])) {
	
	$p_id = $_POST['p_id'];
	$u_id = $_POST['u_id'];
	$name = $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$post = $_POST['code'];
	$pp   = $_POST['parking_price'];
	$hours= $_POST['hours'];
	$odel = $_POST['odel'];
	$color= $_POST['color'];
	$reg  = $_POST['register'];
	$place = $_POST['place'];

	$tot = $pp * $hours;

	$cot = "INSERT INTO `booking` (`b_id`, `p_id`, `u_id`, `user_name`, `email`, `phone`, `post`, `parking_price`, `hours`, `place`, `model`, `color`, `register`,`total_cost`) VALUES (NULL, '$p_id', '$u_id', '$name', '$email', '$phone', '$post', '$pp', '$hours', '$place', '$odel', '$color', '$reg','$tot')";
	$ece = mysqli_query($db,$cot);

	header('location:booking-confirm.php');
}


?>