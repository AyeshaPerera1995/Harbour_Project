<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';
$em = $_SESSION['admin_email'];

//user registrion details
$get_u = "select * from login where username='$em'";
$run_u = mysqli_query($con, $get_u);
$row_u = mysqli_fetch_array($run_u);

$pw = $row_u['password'];
$status = $row_u['status'];
$uid = $row_u['user_iduser'];
$unanme = $row_u['username'];

//user details
$us = "select * from user where iduser='$uid'";
$run_us = mysqli_query($con, $us);
$row_us = mysqli_fetch_array($run_us);

$familyname = $row_us['family_name'];
$givenname = $row_us['given_name'];
$email = $row_us['email'];
$phone = $row_us['phone'];
$gender = $row_us['gender'];
$national = $row_us['nationality'];
$uiud = $row_us['iduser'];


if ($status == 1) {

    $st = "Active";


} else {
    $st = "Inactive";
}





?>


<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 |User update </title>
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
        <a ><b>Update User</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Update User </p>

            <form action="userupdate.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="fname" class="form-control"  value="<?php echo $familyname; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="gname" class="form-control" value="<?php echo $givenname; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="myInput" name="password" class="form-control" value="<?php echo $pw; ?>">
                    <input type="checkbox" onclick="myfunction()"  style="margin-top: 15px">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="nation" class="form-control" value="<?php echo $national; ?>">
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

                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" name="edit_user" class="btn btn-primary btn-block">update</button>
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
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
</html>

<?php


if (isset($_POST['edit_user'])) {
    $fnam2 = '';
    $lname2 = '';
    $tel2 = '';
    $mail2 = '';
    $pass2 = '';


    $familyname = $_POST['fname'];
    $givenname = $_POST['gname'];
    $email = $_POST['email'];
    $passwod = $_POST['password'];
    $phone = $_POST['phone'];
    $natanality = $_POST['nation'];



    if ($email == !null) {


        $update_user = "update user set family_name='$familyname', given_name='$givenname', phone='$phone', nationality='$natanality' where iduser='$uiud'";
        $run_user = mysqli_query($con, $update_user);

        $update_userreg = "update login set username='$email', password='$passwod', user_iduser='$uiud' where Email='$email'";
        $run_userreg = mysqli_query($con, $update_userreg);


        if ($run_user && $run_userreg) {
            echo "<script>alert('User Details Updated Successfully!')</script>";
            echo "<script>window.location.replace('userupdate.php')</script>";
        }

    } else {


    }


}


?>


