<?php
// mysqli_connect() function opens a new connection to the MySQL server.

require_once('connection.php');

session_start();// Starting Session
// Storing Session
$admin_check = $_SESSION['login_admin'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from `user` where `email` = '$admin_check' ";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>