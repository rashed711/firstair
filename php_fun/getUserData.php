<?php
error_reporting(error_level: 0);
session_start();
$stm = "select * from users where email='$_SESSION[email]'";
$result = mysqli_query($conn,  $stm);
$row = mysqli_fetch_array($result);

?>
