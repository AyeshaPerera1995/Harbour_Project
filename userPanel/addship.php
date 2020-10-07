<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';

$u_id = $_SESSION['user_id'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--alert-->
    <script src="../sweetalert/sweetalert2.all.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../index.php" class="nav-link">Home</a>
            </li>
        </ul>




    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">User Panele</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['user_email'];?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="index.php" class="nav-link ">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Dashbord

                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="addship.php" class="nav-link">
                            <i class="nav-icon fas fa-ship"></i>
                            <p>
                                add Ship

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="passenger.php" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                add Passenger

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="crewperson.php" class="nav-link">
                            <i class="nav-icon fas fa-person-booth"></i>
                            <p>
                                add Crew Person

                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add new ship</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="addship.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ship Name</label>
                                <input type="text" required class="form-control" name="shipname" placeholder="Ship Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Call Sign</label>
                                <input type="text" required class="form-control"  name="callsign" placeholder="Call Sign">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">IMO NO</label>
                                <input type="number" required class="form-control" name="imono" placeholder="IMO NO">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">MMSI NO</label>
                                <input type="number" required class="form-control" name="mmsino" placeholder="MMSI NO">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Flag State</label>
                                <input type="text" required class="form-control" name="flag" placeholder="Flag State">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Gross Tonnage</label>
                                <input type="number" required class="form-control" name="gton" placeholder="Gross Tonnage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Net Tonnage</label>
                                <input type="number" required class="form-control" name="nton" placeholder="Net Tonnage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ship Type</label>
                                <input type="text" required class="form-control" name="shiptype" placeholder="Ship Type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Certify Port</label>
                                <input type="text" required class="form-control" name="cport" placeholder="Certify Port">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Certify Date</label>
                                <input type="date" required class="form-control" name="cdate" placeholder="Certify Date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Certify Number</label>
                                <input type="text" required class="form-control" name="cnumber" placeholder="Certify Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Company</label>
                                <input type="text" required class="form-control" name="company" placeholder="Company">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Company Email</label>
                                <input type="email" required class="form-control" name="email" placeholder="Company Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Company Phone</label>
                                <input type="number" required class="form-control" name="phone" placeholder="Company Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Year of Built</label>
                                <input type="date" required class="form-control" name="ybuilt" placeholder="Year of Built">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Length Overall</label>
                                <input type="number" required class="form-control" name="length" placeholder="Length Overall">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dead Weight</label>
                                <input type="number" required class="form-control" name="weight" placeholder="Dead Weight">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Beam</label>
                                <input type="number" required class="form-control" name="beam" placeholder="Beam">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Add My Ship</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




    <footer class="main-footer">

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php


if (isset($_POST['submit'])) {

    $shipname= $_POST['shipname'];
    $callsign= $_POST['callsign'];
    $imono= $_POST['imono'];
    $mmsino= $_POST['mmsino'];
    $flag= $_POST['flag'];
    $tonnage= $_POST['gton'];
    $ntonnage= $_POST['nton'];
    $type= $_POST['shiptype'];
    $port= $_POST['cport'];
    $date= $_POST['cdate'];
    $number= $_POST['cnumber'];
    $company= $_POST['company'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $ybuilt= $_POST['ybuilt'];
    $lenth= $_POST['length'];
    $deight= $_POST['weight'];
    $beam= $_POST['beam'];

    $usercreate = "INSERT INTO ship (ship_name,call_sign,IMO_number,MMSI_number,flag,gross_tonnage,net_tonnage,ship_type,certify_port,certify_date,certify_number,company,c_email,c_phone,year_of_built,length_overall,dead_weight,beam,status,user_iduser) "
        . "values('$shipname','$callsign','$imono','$mmsino','$flag','$tonnage','$ntonnage','$type','$port','$date','$number','$company','$email','$phone','$ybuilt','$lenth','$deight','$beam',1,'$u_id')";


    if (mysqli_query($con, $usercreate)) {
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Ship sent to Registration',
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
        echo "<script>window.location.replace('addship.php')</script>";
        echo "Error: " . $usercreate. "<br>" . mysqli_error($con);
    }








}


?>