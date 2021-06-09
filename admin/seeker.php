<?php

session_start();
error_reporting(0);
include('conn.php');include('C:\xampp\htdocs\BloodBankManagementSystem\conn.php');
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
    <br><br>
    <div class="container">
        <div class="col-lg-12">

            <h3 class="text-primary text-center"> Seeker EDIT and DELETE </h3><br><br><br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">
                    <th colspan="2"> Operation </th>
                    <th> sid </th>
                    <th> dob </th>
                    <th> blood Group </th>
                    <th> gender </th>
                    <th> city </th>
                    <th> state </th>

                </tr>

                <?php

                include 'conn.php';
                $query = "select * from seeker";

                $data = mysqli_query($conn, $query);
                while ($res = mysqli_fetch_array($data)) {
                    ?>
                    <tr class="text-center">
                        <td> <button class="btn-primary btn"> <a href="updateseeker.php?sid=<?php echo $res['sid']; ?>" class="text-white"> Update </a> </button> </td>
                        <td> <button class="btn-danger btn"> <a href="deleteseeker.php?sid=<?php echo $res['sid']; ?>" class="text-white"> Delete </a> </button> </td>
                        <td> <?php echo $res['sid'];  ?> </td>
                        <td> <?php echo $res['dob'];  ?> </td>
                        <td> <?php echo $res['blood'];  ?> </td>
                        <td> <?php echo $res['gender'];  ?> </td>
                        <td> <?php echo $res['city'];  ?> </td>
                        <td> <?php echo $res['state'];  ?> </td>
                    </tr>
                <?php
                }
                ?>

            </table>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabledata').DataTable();
        })
    </script>

</body>

</html>