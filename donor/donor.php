<?php
session_start();
error_reporting(0);
include('conn.php');
if ($_SESSION['email'] == true) {
    //echo $_SESSION['email'];
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
<?php include 'C:/xampp/htdocs/BloodBankManagementSystem/donornavbar.php';?>
    <div class="container">
        <div class="col-lg-12"><br>
        <h3 class="text-primary text-center"> Donor  Profile </h3>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">
                    <th colspan="2"> Operations </th>
                    <th> id </th>
                    <th> picture </th>
                    <th> name </th>
                    <th> dob </th>
                    <th> blood Group </th>
                    <th> gender </th>
                    <th> city</th>

                </tr>

                <?php

                $query = "select * from donor where email='".$_SESSION['email']."'";

                $data = mysqli_query($conn, $query);

                while ($res = mysqli_fetch_array($data)) {
                    ?>
                    <tr class="text-center">
                        <td style="vertical-align: middle;"> <button class="btn-danger btn"> <a href="delete.php?did=<?php echo $res['did']; ?>" class="text-white"> Delete </a> </button> </td>
                        <td style="vertical-align: middle;"> <button class="btn-primary btn"> <a href="update.php?did=<?php echo $res['did']; ?>" class="text-white"> Update </a> </button> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['did'];  ?> </td>
                        <td style="vertical-align: middle;"> <img src="<?php echo $res['picture']; ?>" height='100px' width='100px'/> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['name'];  ?> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['dob'];  ?> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['blood'];  ?> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['gender'];  ?> </td>
                        <td style="vertical-align: middle;"> <?php echo $res['city'];  ?> </td>
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