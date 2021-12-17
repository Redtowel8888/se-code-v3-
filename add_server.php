<?php 
include 'connection.php';
//add product

if (isset($_POST['submit'])) {
	   

	$areas = $_POST['areas'];
	$zip  = $_POST['zip'];
	$price = $_POST['price'];
	$handy_cap = $_POST['handy_cap'];



		$query ="INSERT INTO `places` (`p_id`, `areas`, `zip`, `handy_cap`, `price`) VALUES (NULL, 'upper hutt', '5454', 'yes', '$price')";
      

      $result= mysqli_query($db,$query);	
		
	
	  header("location:index.php");
}

