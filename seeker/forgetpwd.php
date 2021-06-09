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
                <h3>Know Your Password</h3><br>
                <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email Id *" name="email" required="required" />
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Father's Middle  Name *" name="password" required="required" />
                     </div>
                     
                    <div class="form-group ">
                        <button class="btnSubmit" name="login">Find Password</button>
                    </div>
                    
                </form>
            </div>
        
    </form>
</body>

</html>

<?php

if (isset($_POST['login'])) {
     $query="SELECT * FROM `seeker` WHERE `email`='" . $_POST['email'] . "' and `question`='" . $_POST['password'] . "'";
     $data = mysqli_query($conn, $query);
     $res = mysqli_fetch_array($data);
     $total = mysqli_num_rows($data);
     if ($total == 1) {
        $password = $res['password'];
        echo '<script type="text/javascript">';
         echo ' alert("Your Password is : "+"'.$password.'")';  //not showing an alert box.
         echo '</script>';
         echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/seeker/login.php"
      </script>';
     } else {
         echo '<script type="text/javascript">';
         echo ' alert("Wrong Employee Id And Password")';  //not showing an alert box.
         echo '</script>';
     }
 }

?>





