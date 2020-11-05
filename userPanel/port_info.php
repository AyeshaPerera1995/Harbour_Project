<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';

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
                            <!--<a href="#" class="d-block"><?php echo $_SESSION['user_email']; ?></a>-->
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
                                Dashboard

                            </p>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a href="upload_new_noti_details.php" class="nav-link ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                My Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="addship.php" class="nav-link">
                            <i class="nav-icon fas fa-ship"></i>
                            <p>
                                Register Ship

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
                                <h1 class="m-0 text-dark"> <i class="fas fa-anchor"></i>     Port</h1>
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
                                <div class="card card-success">
                                    <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Arrivel / Departure</h5>


                                    <!--                            $sid = $_SESSION['ship_id'];-->

                                    <form role="form" action="port_info.php" method="post">
                                        <div class="card-body">
                                            <div role="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Arrivel / Departure</label>
                                                            <select class="form-control" name="ad">
                                                                <option value="Arrivel">Arrivel</option>
                                                                <option value="Departure">Departure</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Port</h5>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Port of call</label>
                                                            <input type="text" class="form-control" name="port_of_call">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >ETA to port of call</label>
                                                            <input type="datetime-local" class="form-control" name="ETA">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>ETD from port of call</label>
                                                            <input type="datetime-local" class="form-control" name="ETD">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>ATA to port of call</label>
                                                            <input type="datetime-local" class="form-control" name="ATA">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Purpose of call</label>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Cargo operations">   Cargo operations</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Passenger movement">   Passenger movement</label>
                                                            </div>
                                                            <div class="checkbox disabled">
                                                                <label><input type="checkbox" name='checkbox[]' value="Taking bunkers">   Taking bunkers</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Taking supplies">   Taking supplies</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Repair">   Repair</label>
                                                            </div>
                                                            <div class="checkbox disabled">
                                                                <label><input type="checkbox" name='checkbox[]' value="Awaiting orders">   Awaiting orders</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Unloading cargo">   Unloading cargo</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name='checkbox[]' value="Loading cargo">   Loading cargo</label>
                                                            </div>
                                                            <div class="checkbox disabled">
                                                                <label><input type="checkbox" name='checkbox[]' value="Waste disposal">   Waste disposal</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" name="ship_port_upload" class="btn btn-success"><i class="fas fa-upload"></i>   Upload</button>
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
if (isset($_POST['ship_port_upload'])) {
    $ship_ad = $_POST['ad'];
    $ship_port_of_call = $_POST['port_of_call'];
    $ship_eta = $_POST['ETA'];
    $ship_etd = $_POST['ETD'];
    $ship_ata = $_POST['ATA'];
    $notification_id = $_SESSION['n_id'];
    if (!empty($_POST['checkbox'])) {
        foreach ($_POST['checkbox'] as $value) {
            $checkbox = implode(",", $_POST['checkbox']);
        }
    }
    
    $sql = "INSERT INTO port_details (arrival_departure,port_of_call,ETA,ETD,ATA,purpose_of_call,notification_idnotification)"
            . "VALUES ('$ship_ad','$ship_port_of_call','$ship_eta','$ship_etd','$ship_ata','$checkbox','$notification_id')";

    if ($con->query($sql) === TRUE) {
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Port Details Uploaded',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.open('upload_new_noti_details.php','_self')
  				}
				});
                </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    mysqli_close($con);
}

?>

