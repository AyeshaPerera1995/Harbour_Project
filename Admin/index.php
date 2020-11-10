<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
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


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Vessel Port </b>System</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="myInput" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        &nbsp;&nbsp;<input type="checkbox" onclick="myFunction()">  Show Password
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<?php

include_once 'PHP/DB.php' ;

if (isset($_POST['login'])) {


    $email = $_POST['email'];
    $pass = $_POST['password'];
    $s_user = "select * from login where username='$email' AND password='$pass' ";
    $run_user = mysqli_query($con, $s_user);
    $check_user = mysqli_num_rows($run_user);

    while($row = mysqli_fetch_assoc($run_user)) {
        $em = $row['username'];
        $pw = $row['password'];
        $st = $row['status'];
        $ut = $row['iduser_type'];
        $id = $row['user_iduser'];

    }
    if(1==$st){


        if($ut==1||$ut==3||$ut==4||$ut==5){

            if ($email==$em && $pass==$pw  ) {
                $_SESSION['admin_email'] = $em;
                $_SESSION['admin_id'] = $id;

                echo "<script>window.location.replace('home.php')</script>";
            } else {
                echo "<script>alert('Wrong Email or Password!!')</script>";
            }

        } else {

            echo "<script>alert('You Dont Belong Here')</script>";
        }





    } else {

        echo "<script>alert('Your Account is Deactivate')</script>";
    }

}




?>