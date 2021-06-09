<?php
error_reporting(0);
session_start();

include('conn.php');
if ($_SESSION['admin'] == true) {
     //echo $_SESSION['admin'];
} else {
     header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
     <title></title>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>

<body>
     <?php include 'C:/xampp/htdocs/BloodBankManagementSystem/navbar.php'; ?>


     <?php

     $query = "SELECT COUNT(*) as dc FROM `donor`";
     $data = mysqli_query($conn, $query);
     while ($res = mysqli_fetch_array($data)) {
          $ds = $res['dc'];
     }

     $query1 = "SELECT COUNT(*) as sc FROM `seeker`";
     $data1 = mysqli_query($conn, $query1);
     while ($res1 = mysqli_fetch_array($data1)) {
          $ds1 = $res1['sc'];
     }


     $query2 = "SELECT count(*) as rs FROM `requests` WHERE `status`='Request Sent'";
     $data2 = mysqli_query($conn, $query2);
     while ($res2 = mysqli_fetch_array($data2)) {
          $ds2 = $res2['rs'];
     }

     $query3 = "SELECT count(*) as ra FROM `requests` WHERE `status`='Request Accepted'";
     $data3 = mysqli_query($conn, $query3);
     while ($res3 = mysqli_fetch_array($data3)) {
          $ds3 = $res3['ra'];
     }

     $query4 = "SELECT count(*) as rr FROM `requests` WHERE `status`='Request Rejected'";
     $data4 = mysqli_query($conn, $query4);
     while ($res4 = mysqli_fetch_array($data4)) {
          $ds4 = $res4['rr'];
     }

     ?>
     <br><br>

     <h1 class="text-primary text-center"> Report </h1><br><br>
     <div class="container">
          <div class="alert alert-primary" role="alert">
               Total Donors Registered On System :     <?php echo $ds; ?>
          </div>
          <div class="alert alert-secondary" role="alert">
          Total Seeker Registered On System :     <?php echo $ds1; ?>
          </div>
          <div class="alert alert-success" role="alert">
          Total Seekers Sent Request To Donors On System :  <?php echo $ds2; ?>
          </div>
          <div class="alert alert-danger" role="alert">
          Total Donors Accepted Request Received From Seeker :    <?php echo $ds3; ?>
          </div>
          <div class="alert alert-warning" role="alert">
          Total Donors Rejected Request Received From Seeker :    <?php echo $ds4; ?>
          </div>
     </div>


</body>

</html>