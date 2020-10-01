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
        <a href="home.php" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['admin_email'];?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="home.php" class="nav-link ">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Dashbord

                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="to_aprove.php" class="nav-link">
                            <i class="nav-icon fas fa-ship"></i>
                            <p>
                                To aprove ship list

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="aproved.php" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                aproved ship list

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

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Approved Ship List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="aproved.php" method="post">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ship Name</th>
                                    <th>Call Sign</th>
                                    <th>IMO Number</th>
                                    <th>MMSI Number</th>
                                    <th>Added User</th>
                                    <th>Approve Status</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $ship = "select * from ship where status='2'";
                                $shipp = mysqli_query($con, $ship);
                                while ($row = mysqli_fetch_array($shipp)) {
                                    $id = $row['idship'];
                                    $ship_name = $row['ship_name'];
                                    $call_sign = $row['call_sign'];
                                    $IMO_number = $row['IMO_number'];
                                    $MMSI_number = $row['MMSI_number'];
                                    $user = $row['user_iduser'];

                                    $status = $row['status'];
//                                    if ($status != "1") {
                                        echo "<tr>";
                                        echo "<td>" . $id . "</td>";
                                        echo "<td>" . $ship_name . "</td>";
                                        echo "<td>" . $call_sign . "</td>";
                                        echo "<td>" . $IMO_number . "</td>";
                                        echo "<td>" . $MMSI_number . "</td>";
                                        echo "<td>" . $user . "</td>";
                                    echo "<td><h5 style='color: darkgreen'>Approved</h5></td>";
                                    echo "<td><button class='btn btn-danger' name='deactive' value='$id'>Cancel</button></td>";
//                                        if ($status == "1") {
//                                            echo "<td><h5 style='color: red'>Deactive</h5></td>";
//                                        } elseif ($status == "2") {
//                                            echo "<td><h5 style='color: darkgreen'>Approved</h5></td>";
//                                        }
//                                        if ($status == "1") {
//                                            echo "<td><button class='btn btn-success' name='active' value='$id'>Active</button></td>";
//                                        } elseif ($status == "2") {
//                                            echo "<td><button class='btn btn-danger' name='deactive' value='$id'>Cancel</button></td>";
//                                        }

                                        echo "<td><button class='btn btn-primary' name='view' value='$id'>View More</button></td>";
                                        echo "</tr>";
//                                    }
                                }
                                ?>

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </form>
                    </div>
                    <!-- /.card-body -->
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
<?php

if (isset($_POST['active'])) {
    $a_id = $_POST['active'];
    echo $a_id;
    $sql = "UPDATE ship SET status='2' WHERE idship=$a_id";
    echo $sql;

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.replace('ship.php')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['deactive'])) {
    $d_id = $_POST['deactive'];
    echo $d_id;
    $sql = "UPDATE ship SET status='1' WHERE idship=$d_id";
    echo $sql;

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.replace('aproved.php')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['view'])) {
    $v_id = $_POST['view'];
    $_SESSION["ship_id"] = $v_id;
    echo "<script>window.location.replace('view_notifications.php')</script>";

}
mysqli_close($con);

