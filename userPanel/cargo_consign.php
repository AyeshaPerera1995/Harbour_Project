<!--<div class="form-group">-->
<!--    <label class="col-form-label" for="inputWarning"> Input with-->
<!--        warning  <i class="fas fa-exclamation-circle"></i></label>-->
<!--    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">-->
<!--</div>-->
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
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
                        <h1 class="m-0 text-dark"> <i class="fas fa-suitcase"></i>     Cargo - Consignments</h1>
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
                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Cargo Declaration</h5>
                            <div class="card-body">
                                <form role="form" action="cargo_consign.php" method="post">
                                    <div role="form">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label >LRN</label>
                                                    <label class="form-control" style="background-color: lightgrey;" disabled=""></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label >MRN</label>
                                                    <label class="form-control" style="background-color: lightgrey;" disabled=""></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label >Reporting party (EOR)</label>
                                                    <label class="form-control" style="background-color: lightgrey;" disabled=""></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >First port of arrival in EU</label>
                                                    <label class="form-control" style="background-color: lightgrey;" disabled=""></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >ETA of ENS</label>
                                                    <label class="form-control" style="background-color: lightgrey;" disabled=""></label>
                                                </div>
                                            </div>

                                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Add new consignment</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of lading</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of discharge</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Transport document ID</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Number of items</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >UCR</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Place whence consigned</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Goods receipt place</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Freight method of payment</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Number of the authorisation</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Additional information</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Carrier</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Consignor</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Consignee</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Party to be notified</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>


                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label style="color: white;">E</label>
                                                    <button type="submit" name="upload_cd" class="btn btn-danger form-control"><i class="fas fa-upload"></i>   Upload</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <hr><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Port of loading</th>
                                        <th>Port of discharge</th>
                                        <th>Transport document ID</th>
                                        <th>Carrier</th>
                                        <th>Consignor</th>
                                        <th>Consignee</th>
                                        <th>View/Add Cargo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Port of loading</td>
                                        <td>Port of loading</td>
                                        <td>Port of discharge</td>
                                        <td><a href="cargo_cargoitems.php" class="btn btn-dark">Carrier</a></td>
                                        <td><a href="cargo_cargoitems.php" class="btn btn-dark">Consignor</a></td>
                                        <td><a href="cargo_cargoitems.php" class="btn btn-dark">Consignee</a></td>
                                        <td><a href="cargo_cargoitems.php" class="btn btn-dark">View/Add Cargo Items</a></td>
                                    </tr>


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Port of loading</th>
                                        <th>Port of discharge</th>
                                        <th>Transport document ID</th>
                                        <th>Carrier</th>
                                        <th>Consignor</th>
                                        <th>Consignee</th>
                                        <th>View/Add Cargo</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>  <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>  <!--    col-d-12-->

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

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>
</html>






