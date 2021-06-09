<?php

error_reporting(0);
include('conn.php');
echo $_GET['did'];

$query1="DELETE FROM `requests` WHERE `requests`.`did` = '".$_GET['did'] ."'";
mysqli_query($conn, $query1);
$query="DELETE FROM `donor` WHERE `donor`.`did` = '".$_GET['did'] ."'";
mysqli_query($conn, $query);
header('location:donor.php');
?>
