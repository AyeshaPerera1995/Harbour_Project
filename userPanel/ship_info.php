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
            <span class="brand-text font-weight-light">User Panel</span>
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
                        <a href="#" class="nav-link ">
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
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> <i class="fas fa-ship"></i>     Ship</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-info">
            <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Ship information</h5>

            <?php
            $sid = $_SESSION['ship_id'];
            $ship = "select * from ship where user_iduser='$u_id' AND idship=$sid";
            $shipp = mysqli_query($con, $ship);
            $row = mysqli_fetch_array($shipp);
    $id = $row['idship'];
    $ship_name = $row['ship_name'];
    $call_sign = $row['call_sign'];
    $ship_desc = $row['ship_desc'];
    $IMO_number = $row['IMO_number'];
    $MMSI_number = $row['MMSI_number'];
    $flag = $row['flag'];
    $ship_type = $row['ship_type'];
    $g_tonnage = $row['gross_tonnage'];
    $n_tonnage = $row['net_tonnage'];
    $port = $row['certify_port'];
    $date = $row['certify_date'];
    $number = $row['certify_number'];
    $company = $row['company'];
    $c_email = $row['c_email'];
    $c_phone = $row['c_phone'];
    $y_built = $row['year_of_built'];
    $length = $row['length_overall'];
    $weight = $row['dead_weight']
            ?>

            <form role="form" action="ship_info.php" method="post">
                <div class="card-body">
<div role="form">
<div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            <label>Ship Name</label>
            <input type="text" class="form-control" name="ship_name" value="<?php echo $ship_name;?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label>Call Sign</label>
            <input type="text" class="form-control" name="call_sign" value="<?php echo $call_sign;?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label>IMO Number</label>
            <input type="text" class="form-control" name="imo_num" value="<?php echo $IMO_number;?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label>MMSI Number</label>
            <input type="text" class="form-control" name="mmsi_num" value="<?php echo $MMSI_number;?>">
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label >Any other information related to ship identity</label>
            <input type="text" class="form-control" value="<?php echo $ship_desc;?>" name="ship_desc">
        </div>
    </div>

    <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Ship particulars</h5>

    <div class="col-sm-6">
        <div class="form-group">
            <label >Flag State</label>
            <input type="text" class="form-control" name="flag_state" value="<?php echo $flag;?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label >Ship Type</label>
            <input type="text" class="form-control" name="ship_type" value="<?php echo $ship_type;?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Gross Tonnage</label>
            <input type="text" class="form-control" name="gross_ton" value="<?php echo $g_tonnage;?>">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Net Tonnage</label>
            <input type="text" class="form-control" name="net_ton" value="<?php echo $n_tonnage;?>">
        </div>
    </div>

    <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Certificate of registry</h5>

    <div class="col-sm-4">
        <div class="form-group">
            <label >Port</label>
            <input type="text" class="form-control" name="port" value="<?php echo $port;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date" value="<?php echo $date;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="number" value="<?php echo $number;?>">
        </div>
    </div>

    <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Company</h5>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Company Name</label>
            <input type="text" class="form-control" name="c_name" value="<?php echo $company;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="c_email" value="<?php echo $c_email;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="c_phone" value="<?php echo $c_phone;?>">
        </div>
    </div>

    <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Additional ship particulars</h5>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Year of built</label>
            <input type="text" class="form-control" name="year_built" value="<?php echo $y_built;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Length overall</label>
            <input type="text" class="form-control" name="length" value="<?php echo $length;?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Dead weight</label>
            <input type="text" class="form-control" name="weight" value="<?php echo $weight;?>">
        </div>
    </div>

</div>
</div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="ship_info_upload" class="btn btn-info"><i class="fas fa-upload"></i>   Upload</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>  <!--    col-d-12-->


</div>



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

if (isset($_POST['ship_info_upload'])) {
    $ship_name = $_POST['ship_name'];
    $call_sign = $_POST['call_sign'];
    $ship_desc = $_POST['ship_desc'];
    $imo_num= $_POST['imo_num'];
    $mmsi_num= $_POST['mmsi_num'];
    $flag= $_POST['flag_state'];
    $ship_type= $_POST['ship_type'];
    $gross_ton= $_POST['gross_ton'];
    $net_ton= $_POST['net_ton'];
    $port= $_POST['port'];
    $date= $_POST['date'];
    $number= $_POST['number'];
    $c_name= $_POST['c_name'];
    $c_email= $_POST['c_email'];
    $c_phone= $_POST['c_phone'];
    $year_built= $_POST['year_built'];
    $length= $_POST['length'];
    $weight= $_POST['weight'];
    
    $sid = $_SESSION['ship_id'];

    $ship_info = "UPDATE ship set ship_name='$ship_name', call_sign='$call_sign',IMO_number='$imo_num', MMSI_number='$mmsi_num', flag='$flag', gross_tonnage='$gross_ton', net_tonnage='$net_ton', ship_type='$ship_type', certify_port='$port', certify_date='$date', certify_number='$number', company='$c_name', c_email='$c_email', c_phone='$c_phone', year_of_built='$year_built', length_overall='$length', dead_weight='$weight', ship_desc='$ship_desc' where idship='$sid'";
    $run_ship_info = mysqli_query($con,$ship_info);
    if ($run_ship_info){
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Ship Details Uploaded..',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.open('upload_new_noti_details.php','_self')
  				}
				});
                </script>";

    }else {
        echo "Error: " . $ship_info . "<br>" . $con->error;
    }


}

?>
