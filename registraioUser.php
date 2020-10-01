<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Crew Registraion</title>

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

        body {


        }

        form {
            margin-top: 40px;
            margin-left: 50px;
        }

        .single-input {

            width: 500PX;
            border-radius: 10px;

        }

        .typography {
            margin-top: 80px;
            margin-left: 200px;

        }

        .form-select {
            background-color: #9ccff4;
            width: 500PX;
            border-radius: 10px;
        }


    </style>

</head>
<body style="background-color: rgba(173,173,173,0.3)">

<div class="row">


    <div class="col-md-6">

        <div class="typography">
            <h2> Add User </h2>
        </div>
        <form action="#" method="post">

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <input type="text" name="faname" placeholder="Family Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Family Name'" required
                       class="single-input">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <input type="text" name="gname" placeholder="Given Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Given Name'" required
                       class="single-input">
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="email" name="email" placeholder="Email"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                       class="single-input">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <input type="password" name="password" placeholder="Password"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                       class="single-input">
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <input type="number" name="phn" placeholder="Phone"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required
                       class="single-input">
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select"
                ">
                <select name="grnder" style=" border-radius: 50px; ">
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                </select>
            </div>
    </div>

    <div class="input-group-icon mt-10">
        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
        <input type="text" name="nation" placeholder="Nationality"
               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nationality'" required
               class="single-input">
    </div>

    <div class="input-group-icon mt-10">

        <input type="submit" name="sign" class="genric-btn success radius" value="Sign in"
               style="width: 200px;margin-left: 150px">
    </div>


    </form>
    <div style="margin-left:160px;margin-top: 20px; "><a href="login.php" style="color: #0b0b0b">You already have a
            account ? login</a></div>

</div>

<div class="col-md-6">

    <img src="assets/img/ships/log9.jpg"
         style="border-radius:8px;margin: 20px;height: 400px;width: 600px;margin-top: 90px " alt="">

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
include_once 'assets/PHP/DB.php';

if (isset($_POST['sign'])) {

    $familyname = $_POST['faname'];
    $givenname = $_POST['gname'];
    $email = $_POST['email'];
    $passwod = $_POST['password'];
    $phone = $_POST['phn'];

    if(!empty($_POST['grnder'])) {
        $gender = $_POST['grnder'];

    }
    $natanality = $_POST['nation'];


    $usercreate = "INSERT INTO user (family_name,given_name,email,phone,gender,nationality,status) "
        . "values('$familyname','$givenname','$email','$phone','$gender','$natanality',1)";

    $intouser = mysqli_query($con, $usercreate);

    $getuser = "select * from user where email='$email' ";
    $getintouser = mysqli_query($con, $getuser);
    while($row = mysqli_fetch_assoc($getintouser)) {
        $user_id = $row['iduser'];

    }

    $sql2 = "INSERT INTO login (username,password,user_iduser,iduser_type,status) "
        . "values('$email','$passwod','$user_id','2',1)";

    if (mysqli_query($con, $sql2)) {
        echo "<script>alert('User Registered Successfully!')</script>";

        echo "<script>window.location.replace('registraioUser.php')</script>";
    } else {
        echo "<script>window.location.replace('registraion.php')</script>";
        echo "Error: " . $sql2. "<br>" . mysqli_error($con);
    }



}


?>