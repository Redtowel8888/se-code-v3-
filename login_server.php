<?php 
include 'connection.php';
session_start();

if (isset($_POST['login'])) {
	
	if(empty($_POST['email']) || empty($_POST['password']))
	{
		 header("location:login.php?Empty= Please Fill in the Blanks");
     }
     else
     {

		$email=$_POST['email'];
		$password=$_POST['password'];

		$query = "SELECT * FROM `user` WHERE  (email='".$_POST['email']."' and password='".$_POST['password']."' and type='".admin."') ";
       
		$result=mysqli_query($db,$query);
        
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['login_admin']=$_POST['email'];
                header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Invalid User Email and Password ");
            }
		
	}
}
 ?>