<?php
// mysqli_connect() function opens a new connection to the MySQL server.

require_once('connection.php');

session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from user where email = '$user_check' ";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>