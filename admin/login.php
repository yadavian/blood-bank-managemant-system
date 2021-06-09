<?php
session_start();
error_reporting(0);
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Blood Bank Management</title>
    <style>
        .login-container {
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: 27%;
        }

        .login-form-1 {
            padding: 5%;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-1 h3 {
            text-align: center;
            color: #333;
        }


        .login-container form {
            padding: 5%;
        }

        .btnSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
            
        }

        .login-form-1 .btnSubmit {
            font-weight: 600;
            color: #fff;
            background-color: #0062cc;
        }


        .login-form-1 .ForgetPwd {
            color: #0062cc;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form action="" method="post">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>ADMIN LOGIN</h3><br>
                <form method="post">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your User Name *" name="username" required="required" />
                        <!-- <input type="text" class="form-control" placeholder="Your Employee Id *" name="email" required="required" /> -->
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" name="password" pattern="^\S{6,}$" title="Enter atleast 7 Numbers" required="required" />
                        <!-- <input type="password" class="form-control" placeholder="Your Password *" name="password" pattern="^\S{6,}$" title="Enter atleast 7 Numbers" required="required" />-->
                    </div> 
                    <div class="form-group ">
                        <button class="btnSubmit" name="login">Login</button>
                    </div>
                    <div class="form-group">
                        <a class="ForgetPwd" href="logout.php">Home</a>
                    </div>
                    
                </form>
            </div>
        
    </form>
</body>

</html>

<?php

if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" and $_POST['password'] == "admin123") {
        $_SESSION['admin']=$_POST['username'];
        header('location:admin.php');
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong Admin user Id And Password")';  //not showing an alert box.
        echo '</script>';
    }
}
?>





