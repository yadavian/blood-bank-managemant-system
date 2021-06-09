<?php
session_start();
error_reporting(0);
include('conn.php');
if ($_SESSION['email'] == true) {
    //echo $_SESSION['email'];
} else {
    header('location:login.php');
}
//echo $_REQUEST['did'];
//echo $_SESSION['sid'];

$query="INSERT INTO `requests` (`did`, `sid`, `status`) VALUES ('".$_REQUEST['did']."', '".$_SESSION['sid']."', 'Request Sent');";


$data = mysqli_query($conn, $query);
if ($data) {
    echo '<script type="text/javascript">';
    echo ' alert("Request Sent to the Donor")';
    echo '</script>';
    echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/seeker/search.php"
      </script>';
} else {
    echo '<script type="text/javascript">';
    echo ' alert("Something Went Wrong")';
    echo '</script>';
}

?>