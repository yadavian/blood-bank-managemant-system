<?php
error_reporting(0);
include('conn.php');
echo $_GET['rid'];

$query1="DELETE FROM `requests` WHERE `requests`.`rid` = '".$_GET['rid'] ."'";
mysqli_query($conn, $query1);
header('location:request.php');
?>
