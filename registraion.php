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
    <title>Sign in</title>

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

        form{
            margin-top:40px;margin-left: 50px;
        }

        .single-input{
            background-color: #9ccff4;
            width: 500PX    ;
            border-radius: 10px;

        }
        .typography{
            margin-top:120px;
           margin-left: 100px;

        }


    </style>

</head>
<body style="background-color: rgba(227,227,227,0.3)">

<div class="row">


    <div class="col-md-6">

            <div class="typography" >
            <h2>Wellcome to Our System </h2>
        </div>
        <form style="overflow: scroll; width: 600px;height: 300px;" action="registraion.php" method="post" >

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-ship" aria-hidden="true"></i></div>
                <input type="text" name="shipname" placeholder="Ship Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ship Name'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-sign-language" aria-hidden="true"></i></div>
                <input type="text" name="callsign" placeholder="Call Sign"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Call Sign'" required
                       class="single-input" >
            </div>


            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-map-pin" aria-hidden="true"></i></div>
                <input type="text" name="shipcountry" placeholder="Ship Orgin Country"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ship Orgin Country'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-info" aria-hidden="true"></i></div>
                <input type="text" name="imono" placeholder="IMO NO"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'IMO NO'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-sort-numeric-down" aria-hidden="true"></i></div>
                <input type="text" name="mmsino" placeholder="MMSI NO"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'MMSI NO'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-flag-checkered" aria-hidden="true"></i></div>
                <input type="text" name="flag" placeholder="Flag"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flag'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-square" aria-hidden="true"></i></div>
                <input type="number" name="tonnage" placeholder="Gross Tonnage"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gross Tonage'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                <input type="number" name="ntonnage" placeholder="Net Tonnage"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Net Tonage'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                <input type="text" name="type" placeholder="Ship Type"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ship Type'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-paragraph" aria-hidden="true"></i></div>
                <input type="text" name="port" placeholder="Port"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = Port'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                <input type="date" name="date" placeholder="Date"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-building" aria-hidden="true"></i></div>
                <input type="text" name="company" placeholder="Company"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="email" name="email" placeholder="Company Email"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Email'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
                <input type="number" name="ybuilt" placeholder="Year of Built"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Year of Built'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-random" aria-hidden="true"></i></div>
                <input type="number" name="lenth" placeholder="Lenth Overall"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lenth Overall'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-magnet" aria-hidden="true"></i></div>
                <input type="number" name="deight" placeholder="Dead Weight"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dead Weight'" required
                       class="single-input" >
            </div>






            <div class="input-group-icon mt-10">

                <input type="submit" class="genric-btn success radius" value="Sign in" name="login" style="width: 200px;margin-left: 150px" >
            </div>



        </form>
     </div>
    <div class="col-md-6">

        <img src="assets/img/ships/log9.jpg" style="border-radius:8px;margin: 20px;height: 400px;width: 600px;margin-top: 80px " alt="">

    </div>


</div>





</body>
</html>

<?php
include_once'assets/PHP/DB.php';
if(isset($_POST['login'])){

    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];
    $s = $_POST[''];




}







?>