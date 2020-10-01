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

        form{
            margin-top:40px;margin-left: 50px;
        }

        .single-input{
            background-color: #9ccff4;
            width: 500PX    ;
            border-radius: 10px;

        }
        .typography{
            margin-top:80px;
           margin-left: 100px;

        }


    </style>

</head>
<body style="background-color: rgba(227,227,227,0.3)">

<div class="row">


    <div style="overflow: scroll;" class="col-md-6">

            <div class="typography" >
            <h2>Add Your Crew Members </h2>
        </div>
        <form action="#" method="post" >

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <input type="text" name="faname" placeholder="Family Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Family Name'" required
                       class="single-input" >
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <input type="text" name="gname" placeholder="Given Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Given Name'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-star" aria-hidden="true"></i></div>
                <input type="text" name="rank" placeholder="Rank or Rating"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rank or Rating'" required
                       class="single-input" >
            </div>


            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
                <input type="text" name="Nationality" placeholder="Nationality"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nationality'" required
                       class="single-input" >
            </div>

            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                <input type="text" name="visa" placeholder="Visa/ Resident Permit No"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Visa/ Resident Permit No'" required
                       class="single-input" >
            </div>





            <div class="input-group-icon mt-10">

                <input type="submit" class="genric-btn success radius" value="Sign in" style="width: 200px;margin-left: 150px" >
            </div>



        </form>

    </div>
    <div class="col-md-6" s>

        <img src="assets/img/ships/log9.jpg" style="border-radius:8px;margin: 20px;height: 400px;width: 600px;margin-top: 90px " alt="">

    </div>


</div>





</body>
</html>