<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harbour Project </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

        body{


        }
        form{
            margin-top:40px;margin-left: 50px;
        }

        .single-input{

            width: 500PX    ;
            border-radius: 10px;
            margin-top: 20px;

        }
        .typography{
            margin-top:80px;
           margin-left: 150px;

        }



    </style>

    <!--alert-->
    <script src="sweetalert/sweetalert2.all.min.js"></script>

</head>
<body style="background-color: rgba(173,173,173,0.3)">

<div class="row">


    <div  class="col-md-6" >

            <div class="typography" >
            <h2> Login to Your Account </h2>
                 </div>
        <form action="login.php" method="post" >

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="text" name="email" placeholder="Email"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <input type="password" name="password" placeholder="Password"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">

                <input type="submit" name="login" class="genric-btn success radius" value="Login" style="width: 200px;margin-left: 150px;margin-top: 20px;" >
            </div>

        </form>
    <div style="margin-left:160px;margin-top: 20px; "> <a href="registraioUser.php" style="color: #0b0b0b" >You Don't Have an Account ? Sign in</a></div>

</div>

    <div class="col-md-6" >

        <img src="assets/img/ships/log9.jpg" style="border-radius:8px;margin: 20px;height: 400px;width: 600px;margin-top: 90px " alt="">

    </div>


</div>


<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


</body>
</html>
<?php

include_once 'assets/PHP/DB.php' ;

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
    echo $st;
    if($st==1){


        if($ut==2 || $ut==3 || $ut==4 || $ut==5){

            if ($email==$em && $pass==$pw  ) {
                $_SESSION['user_email'] = $em;
                $_SESSION['user_id'] = $id;

                echo "<script>
    			swal({
                    type: 'success',
                    title:'Login Successfully!',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
                    window.location.replace('index.php','_self')
  				}
				});
                </script>";

            } else {
                echo "<script>
    			swal({
                    type: 'error',
                    title:'Wrong email or password, Try again..',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.location.replace('login.php','_self')
  				}
				});
                </script>";
            }

        } else {

            echo "<script>
    			swal({
                    type: 'error',
                    title:'You are not Allowed..',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.location.replace('login.php','_self')
  				}
				});
                </script>";
        }





    } else {

        echo "<script>
    			swal({
                    type: 'warning',
                    title:'Your account is deactivated, Contact your admin.',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.location.replace('login.php','_self')
  				}
				});
                </script>";
    }

}




?>