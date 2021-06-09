<?php
session_start();
error_reporting(0);
include('conn.php');
if ($_SESSION['email'] == true) {
   // echo $_SESSION['email'];
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
    
<?php include 'C:/xampp/htdocs/BloodBankManagementSystem/seekernavbar.php'; ?>
    <div class="container">
        <div class="col-lg-12">
        <br>
            <h3 class="text-primary text-center"> Search Donor</h3>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">

                    <th> id </th>
                    
                    <th> DOB </th>
                    <th> Name </th>
                    <th> Blood Group </th>
                    <th> Gender </th>
                    <th> City </th>
                    <th> Requests </th>

                </tr>

                <?php

                include 'conn.php';
                $query = "select * from donor ORDER BY `did` DESC LIMIT 0, 25 ";

                $data = mysqli_query($conn, $query);

                while ($res = mysqli_fetch_array($data)) {
                    ?>
                    <tr class="text-center">
                        <td> <?php echo $res['did'];  ?> </td>
                        <td> <?php echo $res['name'];  ?> </td>
                        <td> <?php echo $res['dob'];  ?> </td>
                        <td> <?php echo $res['blood'];  ?> </td>
                        <td> <?php echo $res['gender'];  ?> </td>
                        <td> <?php echo $res['city'];  ?> </td>
                        <td> <button class="btn-primary btn"> <a href="sendrequest.php?did=<?php echo $res['did']; ?>" class="text-white"> Send Request </a> </button> </td>

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