<?php

include 'connection.php';

if (isset($_POST['register'])) 
{
	
	$name = $_POST['name'];
	$email= $_POST['email'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];

	if ($password !== $c_password) 
	{
		header('location:signup.php?er=Password is not same');

	}else{

		$sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";
		$exe = mysqli_query($db,$sql);

		header('location:login.php');
	}

}




?>