<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a ><b>Registration</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="register.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="fname" class="form-control" placeholder="Family name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="gname" class="form-control" placeholder="Given name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="phone" class="form-control" placeholder="Phone">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="nation" class="form-control" placeholder="Nationality">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-globe"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 ">


                    <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                </div>
                <div class="input-group mb-3 ">

                    <select name="utype" class="form-control">
                        <option value="1">admin</option>
                        <option value="4"">harbour master</option>
                        <option value="5">consignee</option>
                        <option value="3">ship agent</option>

                    </select>

                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" name="signin" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
include_once 'PHP/DB.php';

if (isset($_POST['signin'])) {


    $familyname = $_POST['fname'];
    $givenname = $_POST['gname'];
    $email = $_POST['email'];
    $passwod = $_POST['password'];
    $phone = $_POST['phone'];

    if (!empty($_POST['utype'])) {
        $utype    = $_POST['utype'];

    }
    if (!empty($_POST['gender'])) {
        $gender = $_POST['gender'];

    }


    $natanality = $_POST['nation'];


    $usercreate = "INSERT INTO user (family_name,given_name,email,phone,gender,nationality,status) "
        . "values('$familyname','$givenname','$email','$phone','$gender','$natanality',1)";

    $intouser = mysqli_query($con, $usercreate);

    $getuser = "select * from user where email='$email' ";
    $getintouser = mysqli_query($con, $getuser);
    while ($row = mysqli_fetch_assoc($getintouser)) {
        $user_id = $row['iduser'];

    }

    $sql2 = "INSERT INTO login (username,password,user_iduser,iduser_type,status) "
        . "values('$email','$passwod','$user_id',' $utype',1)";

    if (mysqli_query($con, $sql2)) {
        echo "<script>alert('User Registered Successfully!')</script>";

        echo "<script>window.location.replace('register.php')</script>";
    } else {
        echo "<script>window.location.replace('register.php')</script>";
        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }


}


?>




