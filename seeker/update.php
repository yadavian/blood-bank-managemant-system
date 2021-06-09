<?php
session_start();
error_reporting(0);
include('conn.php');
if ($_SESSION['email'] == true) {
    //echo $_SESSION['email'];
    //echo $_REQUEST['sid'];
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
    
<?php include 'C:/xampp/htdocs/BloodBankManagementSystem/seekernavbar.php';?><br><br>

    <?php

    include 'conn.php';
    $query = "select * from seeker where `sid`='" . $_REQUEST['sid'] . "'";

    $data = mysqli_query($conn, $query);

    while ($res = mysqli_fetch_array($data)) {
        ?>

        <div class="container">
            <div class="col-lg-8 m-auto">

                <form method="post">

                    <div class="card col-lg-12">

                        
                    <div class="card-header bg-dark">
                            <h4 class="text-white text-center"> Update Donor Data </h4>
                        </div><br>
                        <img style="align-self:center" src='<?php echo $res['picture'];  ?>' height="100px" width="100px" alt="">
                        <br>
                        <label> did</label>
                        <input type="text" name="did" value="<?php echo $res['sid'];  ?>" class="form-control" required="required" disabled> <br>

                        <label>email </label>
                        <input type="text" name="email" value="<?php echo $res['email'];  ?>" class="form-control" disabled> <br>

                        <label> password </label>
                        <input type="text" name="password" value="<?php echo $res['password'];  ?>" class="form-control" > <br>

                        <label>phone </label>
                        <input type="text" name="phone" value="<?php echo $res['phone'];  ?>" class="form-control"  max-lenght="10" minlenght="10"> <br>

                        <label> name</label>
                        <input type="text" name="name" value="<?php echo $res['name'];  ?>" class="form-control" > <br>

                        <label> gender</label>
                        <select name="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <label>blood </label>
                        <select name="blood" class="form-control">
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>

                        <label> dob</label>
                        <input type="date" name="dob" value="<?php echo $res['dob'];  ?>" class="form-control" > <br>


                        <label> state</label>
                        <select name="state" class="form-control">
                            <option value="Maharashtra">Maharashtra</option>
                        </select>
                        

                        <label> city</label>
                        <select name="city" class="form-control">
                            <option value="Mumbai">Mumbai</option>
                            <option value="Chennai">Pune</option>
                            <option value="Lucknow">Nagpur</option>
                            <option value="Banglore">Nashik</option>
                        </select>

                        
                        <br>
                        <label>Question : What is your mother's middle name?</label>
                        <input type="text" name="question" value="<?php echo $res['question'];  ?>" class="form-control" > <br>

                        <button class="btn btn-success" type="submit" name="update"> Update </button><br>

                    <?php
                    }
                    ?>

</body>

</html>


<?php

if (isset($_POST['update'])) {


    $query = "UPDATE `seeker` SET `password` = '" . $_POST['password'] . "',`phone` = '" . $_POST['phone'] . "',`name` = '" . $_POST['name'] . "',`gender` = '" . $_POST['gender'] . "',`blood` = '" . $_POST['blood'] . "',`dob` = '" . $_POST['dob'] . "',`city` = '" . $_POST['city'] . "',`state` = '" . $_POST['state'] . "',`question` = '" . $_POST['question'] . "' WHERE `seeker`.`sid` = '" . $_REQUEST['sid'] . "'";

    $data = mysqli_query($conn, $query);
  

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo '<script type="text/javascript">';
        echo ' alert("Donor Data Inserted ")';
        echo '</script>';
        echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/seeker/seeker.php"
      </script>';
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong ")';
        echo '</script>';
    }
}
?>