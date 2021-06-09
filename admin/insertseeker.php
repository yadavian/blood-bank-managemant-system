<?php
error_reporting(0);
include('conn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
    <title>Add Donor</title>
</head>

<body>


<div class="container register">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>Blood donation is a wonderful way of giving back a life.</p>
                    <input type="submit" name="login" value="Home" formnovalidate="formnovalidate"><br />
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="donor/insert.php" role="tab" aria-controls="home" aria-selected="true">Seeker</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Apply as a Employee</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email Id *" required></div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password *" required>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="phone" class="form-control"  placeholder="Your Phone Number *" required></div>
                                    <div class="form-group" required>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="blood" class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Blood Group</option>
                                                
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select></div>
                                    
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" class="form-control" placeholder="Your Date Of Birth *" required></div>
                                    <div class="form-group">
                                        <select name="city" class="form-control">
                                        <option class="hidden"  selected disabled>Please select your City</option>
                                                
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="Chennai">Pune</option>
                                            <option value="Lucknow">Nagpur</option>
                                            <option value="Banglore">Nashik</option>
                                        </select> </div>
                                    <div class="form-group">
                                        <select name="state" class="form-control">
                                            <option value="Maharashtra">Maharashtra</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="uploadFile" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="question" class="form-control" placeholder="Your Father's Middle Name ? *" required></div>
                                    <input type="submit" name="insert" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Apply as a Hirer</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is Your old Phone Number</option>
                                            <option>What is your Pet Name?</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['insert'])) {

    $fileName = $_FILES['uploadFile']['name'];
    $tempName = $_FILES['uploadFile']['tmp_name'];

    $folder = "donor/" . $fileName;
    echo $folder;
    move_uploaded_file($tempName, $folder);

    $query = "INSERT INTO `donor` (`email`, `password`, `phone`, `name`, `gender`, `blood`, `dob`, `city`, `state`, `picture`, `question`) VALUES ('" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['phone'] . "', '" . $_POST['name'] . "', '" . $_POST['gender'] . "', '" . $_POST['blood'] . "', '" . $_POST['dob'] . "', '" . $_POST['city'] . "', '" . $_POST['state'] . "', '$folder', '" . $_POST['question'] . "')";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo '<script type="text/javascript">';
        echo ' alert("Donor Data Inserted ")';
        echo '</script>';
        echo '<script type="text/javascript">
           window.location = "http://localhost/bloodbankmanagementsystem/admin/admin.php"
      </script>';
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong ")';
        echo '</script>';
    }

    if (isset($_POST['login'])) { 
        echo '<script type="text/javascript">
               window.location = "http://localhost/bloodbankmanagementsystem/index.php"
          </script>';
    }
}
?>