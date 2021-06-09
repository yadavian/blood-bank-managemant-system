<?php
session_start();
error_reporting(0);
include('conn.php');
if ($_SESSION['email'] == true) {
    echo $_SESSION['email'];
} else {
    header('location:login.php');
}
echo $_REQUEST['sid'];
echo $_SESSION['did'];

$query="UPDATE `requests` SET `status` = 'Request Rejected' WHERE `requests`.`did` = '".$_SESSION['did']."' and `sid`='".$_REQUEST['sid']."'";


$data = mysqli_query($conn, $query);
if ($data) {
    echo '<script type="text/javascript">';
    echo ' alert("Request Accepted")';
    echo '</script>';
    echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/donor/viewrequest.php"
      </script>';
} else {
    echo '<script type="text/javascript">';
    echo ' alert("Something Went Wrong")';
    echo '</script>';
    echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/donor/viewrequest.php"
      </script>';
}

?>